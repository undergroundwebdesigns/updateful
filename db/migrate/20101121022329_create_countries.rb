class CreateCountries < ActiveRecord::Migration
  def self.up
    create_table :countries do |t|
      t.integer :region_id
      t.string :name
      t.string :local_name
      t.string :iso_alpha_3, :limit => 3

      t.timestamps
    end
  end

  def self.down
    drop_table :countries
  end
end
