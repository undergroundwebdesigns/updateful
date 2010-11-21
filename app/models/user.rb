require 'md5'

class User < ActiveRecord::Base
  validates_presence_of :email, :password
  validates_uniqueness_of :email
  
  before_save :cypher_password!
  
  def self.login(user)
    logger.info user
  end
  
  private
  
  def hash_password(password)
  end
end
