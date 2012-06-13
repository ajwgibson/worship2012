--
-- Database schema for Worship Application
--

--
-- The "users" table is used by CakePHP Auth component.
--
CREATE TABLE users (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	
	username	VARCHAR(255) NOT NULL,
	password	VARCHAR(255) NOT NULL,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL
	
) ENGINE=InnoDB;
	
--
-- The "songs" table contains a list of worship songs
--
CREATE TABLE songs (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	
	title		VARCHAR(100) NOT NULL,
	composer	VARCHAR(100),
	style		VARCHAR(50),
	example		VARCHAR(255),
	notes		TEXT,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL
	
) ENGINE=InnoDB;

--
-- The "musicians" table contains a list of worship group musicians
--
CREATE TABLE musicians (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	
	name		VARCHAR(100) NOT NULL,
	email		VARCHAR(100),
	instrument	VARCHAR(50),
	church		VARCHAR(100),
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL
	
) ENGINE=InnoDB;

--
-- The "events" table contains a list of events the worship group will play at.
--
CREATE TABLE events (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	
	name		VARCHAR(100) NOT NULL,
	starts		DATETIME,
	finishes	DATETIME,
	venue		VARCHAR(100),
	notes		TEXT,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL
	
) ENGINE=InnoDB;

--
-- The "practices" table contains a list of practices linked to events.
--
CREATE TABLE practices (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	event_id	INT UNSIGNED NOT NULL,
	
	category	VARCHAR(100),
	starts		DATETIME NOT NULL,
	finishes	DATETIME,
	venue		VARCHAR(100) NOT NULL,
	notes		TEXT,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL,
	
	INDEX (event_id),
	
	FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE
	
) ENGINE=InnoDB;
--
-- The "events_songs" table models the many-to-many relationship between events and songs.
--
CREATE TABLE events_songs (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	event_id	INT UNSIGNED NOT NULL,
	song_id		INT UNSIGNED NOT NULL,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL,
	
	INDEX (event_id),
	INDEX (song_id),
	
	FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE,
	FOREIGN KEY (song_id) REFERENCES songs(id) ON DELETE CASCADE
	
) ENGINE=InnoDB;

--
-- The "events_musicians" table models the many-to-many relationship between events and musicians.
--
CREATE TABLE events_musicians (

	id			INT	UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	event_id	INT UNSIGNED NOT NULL,
	musician_id	INT UNSIGNED NOT NULL,
	
	instrument	VARCHAR(50),
	confirmed	BOOLEAN,
	
	created		DATETIME DEFAULT NULL,
	modified	DATETIME DEFAULT NULL,
	
	INDEX (event_id),
	INDEX (musician_id),
	
	FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE,
	FOREIGN KEY (musician_id) REFERENCES musicians(id) ON DELETE CASCADE
	
) ENGINE=InnoDB;

