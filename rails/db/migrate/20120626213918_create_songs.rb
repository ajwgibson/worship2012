class CreateSongs < ActiveRecord::Migration
  def change
    create_table :songs do |t|
      t.string :title
      t.string :composer
      t.string :style
      t.text :notes
      t.string :example
      t.text :onsong

      t.timestamps
    end
  end
end
