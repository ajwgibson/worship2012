--
-- Sample data for Worship Application
--

-- Users	
INSERT INTO users(username, password) VALUES('admin', '9c7c2658953a3acd2d4142c42cdced57875ae7a9'); -- worship999
INSERT INTO users(username, password) VALUES('guest', '8e067a8d81e390c46784c597f16ee9cc9d360b78'); -- guest123

-- songs
INSERT INTO songs (title, composer, style) VALUES ('Above All Powers','Lenny LeBlanc, Paul Baloche','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('All Creation Is A Song','Paul Baloche, Graham Kendrick','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Amazing Grace My Chains Are Gone','John Newton','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('Amazing Love (I''m Forgiven)','Billy James Foote','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Be Still For The Presence Of The Lord','David Evans','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Be Thou My Vision','Mary Elizabeth Byrne, Eleanor Henrietta Hull','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('Before The Throne Of God Above','Vikki Cooke, Charitie L de Chenez','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Blessed Assurance','','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('Blessed Be Your Name','Beth Redman, Matt Redman','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('By Faith We See The Hand Of God','Kristyn Getty, Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Come Now Is The Time To Worship','Brian Doerksen','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Come People Of The Risen King','Kristyn Getty, Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Come Praise The Lord (Every Breath)','Kristyn Lennox, Keith Getty','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Crown Him With Many Crowns','Matthew Bridges, Godfrey Thring','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('Everlasting God','','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Every Promise Of Your Word','Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Everyone Needs Compassion (Mighty To Save)','Reuben Morgan, Ben Fielding','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Faithful One','Brian Doerksen','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Hear The Call Of The Kingdom','Kristyn Getty, Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Here I Am (Wholly Available)','Chris Bowater','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Holy Holy','Nathan Fellingham','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('How Deep The Fathers Love','Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('How Great Thou Art','Stuart Hine','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('How Great Is Our God (The Splendour Of The King)','Chris Tomlin, Jesse Reeves, Ed Cash','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('I Need Thee Every Hour','Annie Sherwood Hawks, R Lowry','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('I Stand Amazed In The Presence','','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('I Will Bless The Lord Forever','Miriam Webster','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('In Christ Alone','Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Jesus Be The Centre','Michael Frye','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Jesus Hope Of The Nations','Brian Doerksen','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Light Of The World','Tim Hughes','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Lord I Come To You','Geoff Bullock','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Men Of Faith','Martin Smith','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('My Jesus My Saviour','Darlene Zschech','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Oh To See The Dawn','Keith Getty, Stuart Townend','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Open The Eyes Of My Heart Lord','Paul Baloche','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Our God Saves','Paul Baloche','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Praise Is Rising (Hosanna)','Benton Brown, Paul Baloche','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Shine Jesus Shine','','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('The Lord''s My Shepherd','Stuart Townend','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('The Power Of The Cross','','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('There Is A Redeemer','Melody Green','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('These Are The Days Of Elijah','Robin Mark','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('What A Friend We Have In Jesus','Joseph Medlicot Scriven','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('When I Survey','Isaac Watts','Traditional');
INSERT INTO songs (title, composer, style) VALUES ('When I Was Lost','Kate Simmonds, Miles Simmonds','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('You Lived, You Died','Paul Baloche','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('Your Blood Speaks A Better Word','Matt Redman','Contemporary');
INSERT INTO songs (title, composer, style) VALUES ('You''re The Word Of God The Father','Keith Getty, Stuart Townend','Contemporary');

--
-- Musicians
--
INSERT INTO musicians (name, instrument, church) VALUES ('Alan Gibson', 'Acoustic Guitar', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Claire Smyth', 'Acoustic Guitar', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Ruth Henderson', 'Keyboards', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Jordan Webster', 'Bass Guitar', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Catherine Paul', 'Drums', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Margaret Clyde', 'Vocals', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Phyllis Clyde', 'Vocals', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Laura Clyde', 'Vocals', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Diane Clyde', 'Vocals', 'Main Street');
INSERT INTO musicians (name, instrument, church) VALUES ('Jayne Booth', 'Vocals', 'Main Street');

INSERT INTO musicians (name, instrument, church) VALUES ('Jennifer Galbraith', 'Vocals', 'First Garvagh');
INSERT INTO musicians (name, instrument, church) VALUES ('Jacqueline McCart', 'Vocals', 'First Garvagh');
INSERT INTO musicians (name, instrument, church) VALUES ('Tanya Magowan', 'Vocals', 'First Garvagh');
INSERT INTO musicians (name, instrument, church) VALUES ('Joy Gordon', 'Vocals', 'First Garvagh');
INSERT INTO musicians (name, instrument, church) VALUES ('Drew Gurney', 'Vocals', 'First Garvagh');
INSERT INTO musicians (name, instrument, church) VALUES ('Andrew Wilson', 'Vocals', 'First Garvagh');

INSERT INTO musicians (name, instrument, church) VALUES ('Pamela Bradley', 'Keyboards', 'St Pauls');
INSERT INTO musicians (name, instrument, church) VALUES ('Andrew McFaul', 'Electric Guitar', 'St Pauls');
INSERT INTO musicians (name, instrument, church) VALUES ('Venita Scott', 'Vocals', 'St Pauls');
INSERT INTO musicians (name, instrument, church) VALUES ('Jacqueline Johnston', 'Vocals', 'St Pauls');
INSERT INTO musicians (name, instrument, church) VALUES ('Eleanor Livingstone', 'Vocals', 'St Pauls');
