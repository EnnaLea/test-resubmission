# test-assignment

general condition:

- Utilize **OOP principles** to handle differences in type logic/behavior

    - Procedural PHP code is allowed exclusively to initialize your PHP classes. Rest logic should be placed within class methods.

    - For OOP you would need to demonstrate code structuring in meaningful classes that extend each other, so we would like to see an abstract class for the main product logic. Please take a look at the polymorphism provision. 
    <!-- fatto! -->

    - Also, MySQL logic should be handled by objects with properties instead of direct column values. Please use setters and getters for achieving this and don't forget to use them for both save and display logic.
    <!-- fatto! -->


- Meet PSR standards ([https://www.php-fig.org](https://www.php-fig.org/))


- Avoid using conditional statements for handling differences in product types
    - This means you should avoid any if-else and switch-case statements which are used to handle any difference between products.
    <!-- fatto! -->


- Do not use different endpoints for different products types. There should be 1 general endpoint for product saving
<!-- si riferisce ai prodotti salvati dal client? or the database endpoint? 
matbe just one table?
credo che si riferisce al sallvataggio dei diversi prodotti nella pagina product list?

ho creato una sola tabella
 -->

- PHP: ^7.0, plain classes, no frameworks, OOP approach

- jQuery: optional

- jQuery-UI: prohibited

- Bootstrap: optional

- SASS: advantage

- MySQL: ^5.6 obligatory
 
####################################################################################

Requirement for PRODUCT LIST:
This is the first page of the website, so should be accessible by <your_website>/
Please note, that on product list page product should not be split by product types - they should be sorted by primary key in database.
<!-- fatto -->

### MUST HAVE for the list items:

- SKU (unique for each product)
- Name
- Price in $
- One of the product-specific attributes and its value
    - Size (in MB) for DVD-disc
    - Weight (in Kg) for Book
    - Dimensions (HxWxL) for Furniture

    <!-- using query to display rows of the table -->
    <!-- fatto! -->

### Required UI elements:

- “ADD” button, which would lead to the “Product Add” page
<!-- fatto -->

- “MASS DELETE” action, implemented as checkboxes next to each product (should have a class: .delete-checkbox) and a button “MASS DELETE” triggering delete action for the selected products.
<!--  see project oop csm to implemet -->
<!-- fatto! -->

- There should be no pagination for the listing, all items should be on the same page
<!-- ok -->
- Do not show any notification messages or alert windows loading the list or after submitting ADD new product dialogue
<!-- ok -->


Requirement for ADD PRODUCT:
- The form should be dynamically changed when the type is switched
- Special attributes should have a description, related to their type, e.g.: “Please, provide dimensions” / “Please, provide weight” / “Please, provide size” when related product type is selected
<!-- fatto -->

- All fields are mandatory for submission, missing values should trigger notification “Please, submit required data”
<!-- implement with js or html? -->
<!-- fatto! -->

- Implement input field value validation, invalid data must trigger notification “Please, provide the data of indicated type”
<!-- data validation  see project php oop-->
<!-- i can use jquery :https://www.geeksforgeeks.org/form-validation-using-jq -->
<!-- fatto? -->


- Notification messages should appear on the same page without reloading
<!-- fatto? -->

- The page must have a “Save” button to save the product. Once saved, return to the “Product List” page with the new product added.
<!-- save into the database then go on product list and show the addiction -->
<!-- fatto! -->

- The page must have a “Cancel” button to cancel adding the product action. Once canceled, returned to the “Product List” page with no new products added.
<!-- delete query then go on product list and show the change -->
<!-- no need of query just redirecting to product list -->
<!-- fatto! -->

- No additional dialogues like “Are you sure you want to Save / Cancel?”
<!-- ok -->
- SKU should be unique for each product and it shouldn’t be possible to save products if already any product with the same SKU exists.
<!-- fatto! -->


#####################################################################################


 <!-- 

 ADD PRODUCT page give the option to add product to the database choose product, one at time.
  -->



  <!-- select the sku, name, and price(this are variable) -> function identifier()
  - select type(this is fixed)
INSERT QUERY!!!

  - depending on the type chooosen:
        book -> enter weight 
        dvd -> enter size 
        furniture -> enter weight, width and lenght
INSERT QUERY!!!

  - save to the database the product:
        can't save a product with the same sku!

INSERT QUERY!!!


  - display all the product on the product page
  
  -->





