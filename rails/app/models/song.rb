class Song < ActiveRecord::Base
  
  attr_accessible :composer, :example, :notes, :onsong, :style, :title
  
  # Validation
  validates :title, :presence => true, :uniqueness => true
  
end
