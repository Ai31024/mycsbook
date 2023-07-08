print('Welcome to Bill payment')  # 'Welcome line'

totalBill = float(input('Please enter the total bill: '))
splitToPeople = float(input('How many people are there to split the bill?: '))
addTipAmount = float(input('How much tip in percent to bill will you add?: '))

tipPercent = addTipAmount*0.01
grandTotal = totalBill + (totalBill*tipPercent)
splitAmount = grandTotal / splitToPeople

print(f'Your Grand Total is : {grandTotal}')
print(f'and each person pays: {splitAmount}')
