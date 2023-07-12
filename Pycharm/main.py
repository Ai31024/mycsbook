print("\nWelcome to the Love Calculator!\n")

yourName1 = input("What is your name? \n")
theirName2 = input("What is their name? \n")

yourName = yourName1.lower()
theirName = theirName2.lower()

your_T = int(yourName.count("t"))
your_R = int(yourName.count("r"))
your_U = int(yourName.count("u"))
your_E = int(yourName.count("e"))

your_L = int(yourName.count("l"))
your_O = int(yourName.count("o"))
your_V = int(yourName.count("v"))
your_E = int(yourName.count("e"))

their_T = int(theirName.count("t"))
their_R = int(theirName.count("r"))
their_U = int(theirName.count("u"))
their_E = int(theirName.count("e"))

their_L = int(theirName.count("l"))
their_O = int(theirName.count("o"))
their_V = int(theirName.count("v"))
their_E = int(theirName.count("e"))

firstDigit = str(your_T + your_R + your_U + your_E + their_T + their_R + their_U + their_E)

secondDigit = str(your_L + your_O + your_V + your_E + their_L + their_O + their_V + their_E)

core = firstDigit + secondDigit

loveScore = int(core)

if loveScore < 10 or loveScore > 90:
    print(f"Your love score is {loveScore}, you go together like soda and mint.")
elif loveScore > 40 and loveScore < 50:
    print(f"Your love score is {loveScore}, you are alright together.")
else:
    print(f"Your love score is {loveScore}.")
