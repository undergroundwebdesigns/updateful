# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20101121015703) do

  create_table "addresses", :force => true do |t|
    t.integer  "user_id"
    t.string   "address1"
    t.string   "address2"
    t.integer  "city_id"
    t.integer  "postal_code_id"
    t.string   "phone_number"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "services", :force => true do |t|
    t.string   "name"
    t.string   "url"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "services_users", :id => false, :force => true do |t|
    t.integer "service_id"
    t.integer "user_id"
  end

  add_index "services_users", ["service_id"], :name => "index_services_users_on_service_id"
  add_index "services_users", ["user_id"], :name => "index_services_users_on_user_id"

  create_table "users", :force => true do |t|
    t.string   "email"
    t.string   "password"
    t.string   "open_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

end
