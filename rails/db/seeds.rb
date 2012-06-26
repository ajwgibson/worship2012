# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).

# Songs
Song.delete_all

Song.create(
  :title => 'Above All Powers',
  :composer => 'Lenny LeBlanc, Paul Baloche',
  :style => 'Contemporary')

Song.create(
  :title => 'All Creation Is A Song',
  :composer => 'Paul Baloche, Graham Kendrick',
  :style => 'Contemporary')
  
Song.create(
  :title => 'Amazing Grace My Chains Are Gone',
  :composer => 'John Newton',
  :style => 'Traditional')
  
Song.create(
  :title => %{Amazing Love (I'm Forgiven)},
  :composer => 'Billy James Foote',
  :style => 'Contemporary')