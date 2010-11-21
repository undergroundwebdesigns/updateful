class ChangeUserPasswordToHashedPassword < ActiveRecord::Migration
  def self.up
    add_column "users", "hashed_password", :string
    remove_column "users", "password"
  end

  def self.down
    remove_column "users", "hashed_password"
    add_column "users", "password", :string
  end
end
