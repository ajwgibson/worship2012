require 'test_helper'

class SongTest < ActiveSupport::TestCase
  
  test "song title must not be empty" do
	song = Song.new
	assert song.invalid?
	assert song.errors[:title].any?
  end
  
  test "song title must be unique" do
	song = Song.new(:title => songs(:amazing_grace).title)
	assert !song.save
  end
  
end
