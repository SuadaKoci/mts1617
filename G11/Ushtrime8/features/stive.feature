Feature: Stive Methods
	Implement push 
	Implement top
	Implement pop

	Scenario: Implements Methods
		Given there is a stive and i add 7
		Then I should have 7 at top of stive
		When I add number 4 to stive
		Then I should have 4 at top of stive
		When I remove an element from stive
		Then I should have 7 at top of stive