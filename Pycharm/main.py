print('''
*******************************************************************************
          |                   |                  |                     |
 _________|________________.=""_;=.______________|_____________________|_______
|                   |  ,-"_,=""     `"=.|                  |
|___________________|__"=._o`"-._        `"=.______________|___________________
          |                `"=._o`"=._      _`"=._                     |
 _________|_____________________:=._o "=._."_.-="'"=.__________________|_______
|                   |    __.--" , ; `"=._o." ,-"""-._ ".   |
|___________________|_._"  ,. .` ` `` ,  `"-._"-._   ". '__|___________________
          |           |o`"=._` , "` `; .". ,  "-._"-._; ;              |
 _________|___________| ;`-.o`"=._; ." ` '`."\` . "-._ /_______________|_______
|                   | |o;    `"-.o`"=._``  '` " ,__.--o;   |
|___________________|_| ;     (#) `-.o `"=.`_.--"_o.-; ;___|___________________
____/______/______/___|o;._    "      `".o|o_.--"    ;o;____/______/______/____
/______/______/______/_"=._o--._        ; | ;        ; ;/______/______/______/_
____/______/______/______/__"=._o--._   ;o|o;     _._;o;____/______/______/____
/______/______/______/______/____"=._o._; | ;_.--"o.--"_/______/______/______/_
____/______/______/______/______/_____"=.o|o_.--""___/______/______/______/____
/______/______/______/______/______/______/______/______/______/______/_____ /
*******************************************************************************
''')
print("Welcome to Treasure Island.")
print("Your mission is to find the treasure.")

# Write your code below this line 👇

choiceA = input(
    "\nYou were walking through the jungle and came to a place that splits into two turns,\nwould you go 'Left' "
    "towards flower path or take 'Right' turn into a ditch?\n")
choice1 = choiceA.lower()
if choice1 == "left":
    choiceB = input("\nYou walked further and saw a river.\nWould you try to 'Swim' or 'Wait' for a boat?\n")
    choice2 = choiceB.lower()
    if choice2 == "wait":
        choiceC = input(
            "While crossing the river by boat, you saw a house with 'Red', 'Yellow', and 'Blue' door.\nWhich door will "
            "you choose?\n")
        choice3 = choiceC.lower()
        if choice3 == "yellow":
            print("Gold Treasure was waiting for you!\nYou got the treasure!\nYou Won!")
        elif choice3 == "red":
            print("Red Fire burned you up.\nGame Over.")
        elif choice3 == "blue":
            print("Blue Demon took you in.\nGame Over.")
        else:
            print("You tried to find unknown door. You were transported into void.\nGame Over.")
    else:
        print("You tried to swim across the river, but piranhas attacked you!.\nGame Over. ")
else:
    print("You tried to be brave but you fell into a hole.\nGame Over.")
