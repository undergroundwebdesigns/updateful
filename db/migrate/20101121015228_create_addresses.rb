class CreateAddresses < ActiveRecord::Migration
  def self.up
    create_table :addresses do |t|
      t.integer :user_id
      t.string :address1
      t.string :address2
      t.integer :city_id
      t.integer :postal_code_id
      t.string :phone_number

      t.timestamps
    end
  end

  def self.down
    drop_table :addresses
  end
end
