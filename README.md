# Grocery Inventory Project

## Logic Behind the Implementation

### 1. HTML Structure:
- The HTML structure includes a form for adding new items and a table for displaying the inventory.
- The form has fields for the name, type, price, and expiry date of the new item, and a submit button.

### 2. PHP Code:
#### 2.1. Initialization of Inventory Array:
- An inventory array is initialized with some default items.

#### 2.2. Form Handling:
- When the form is submitted, the details of the new item are retrieved from the form fields.
- A new item array is created with the submitted details and added to the inventory array.

#### 3. Display Inventory:
- The current date is obtained using `date("Y-m-d")`.
- The inventory array is iterated over using a `foreach` loop, and for each item in the inventory, a new table row is created with the item's details added to the table.
- The expiry date of each item is compared with the current date to determine the status (expired or valid) in the same table.

## Assumptions Made
1. **Static Initialization**: The initial inventory is hardcoded into the PHP script.
2. **Data Validation**: Adding data into the form fields has not been validated and is assumed to be correct.

## Challenges Faced
- **Maintaining state across requests** and handling larger datasets effectively would require more advanced techniques beyond the scope of this implementation.
