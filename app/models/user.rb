class User < ActiveRecord::Base
  # Include default devise modules. Others available are:
  # :token_authenticatable, :confirmable, :lockable and :timeoutable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :trackable, :validatable, :openid_authenticatable

  # Setup accessible (or protected) attributes for your model
  attr_accessible :email, :password, :password_confirmation, :remember_me, :identity_url
  
  def self.create_from_identity_url(identity_url)
    User.create(:identity_url => identity_url)
  end
  
  def self.openid_required_fields
    ["email", "http://axschema.org/contact/email"]
  end
  
  def openid_fields=(fields)
    fields.each do |key, value|
      # Some AX providers can return multiple values per key
      if value.is_a? Array
        value = value.first
      end

      case key.to_s
      when "email", "http://axschema.org/contact/email"
        self.email = value
      else
        logger.error "Unknown OpenID field: #{key}"
      end
    end
  end

end
