Feature: Kristas Blog
	Copyright
	Test Search

	Scenario: Implement Test Copyright
		Given there is a blog "http://www.kristasblog.com/"
		When I visit this blog
		Then I should have "Kristasblog All Rights Reserved."

	Scenario: Implement Test Search
		Given there is a blog "http://www.kristasblog.com/"
		When I visit this blog
		When I click "body > div.global-viewport > div.sidemenu > div.sidemenu-wrapper > div > div > i"
		When I Insert value "Dress" on field "s"
		When I submit form "body > div.global-viewport > div.sidemenu > div.sidemenu-wrapper > div > div > div > form"
		Then I should have "The cocktail dress"
