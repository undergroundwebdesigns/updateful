class CreatePostalCodes < ActiveRecord::Migration
  def self.up
    create_table :postal_codes do |t|
      t.integer :city_id
      t.string :postal_code

      t.timestamps
    end
  end

  def self.down
    drop_table :postal_codes
  end
end
