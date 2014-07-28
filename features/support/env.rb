require 'capybara'
require 'capybara/cucumber'
require 'capybara/mechanize'
require 'rspec'

Capybara.configure do |config|
  config.app = "user_manager"
  config.default_driver = :mechanize
  config.app_host       = 'http://localhost/um'
end

Before do
	Capybara.current_session.driver.browser.agent.open_timeout = 1
	Capybara.current_session.driver.browser.agent.read_timeout = 1
end
