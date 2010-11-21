class CreateServicesUsers < ActiveRecord::Migration
  def self.up
    create_table :services_users, :id => false do |t|
      t.integer :service_id
      t.integer :user_id
    end
    
    add_index "services_users", "service_id"
    add_index "services_users", "user_id"
  end

  def self.down
    drop_table :service_users
  end
end
