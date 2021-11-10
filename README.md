# BookStore-PHP

Part A:
 Introduction
In this assignment, you are going to create an online bookstore with PHP accessing MySQL database.
The code in this assignment will be built upon in future assignments. Therefore it is important to write your code in a modular fashion, so that you can easily update or modify selected parts.
Note: it is critical to follow the following specification below exactly, including file names and directories.
 Specification:  Preparation:
1) On your zenit account, create a directory (a1) under your public_html/bti320 directory. Put all work for this assignment in this directory. The directory will be like: [1 mark]
public_html/bti320/a1
2) Create a secret directory under your home directory. Give the directory permission 701 so that Apache, which runs under a userid that is part of others, can enter this directory. The steps may be as follows: [2 marks]
bti320_163a01@home0:~>mkdir secret [enter]
bti320_163a01@home0:~>chmod 701 secret [enter]
3) In your secret directory, create a text file named topsecret.txt, which contains the following in
this order and each in a line as follows: MySQL server name
[2 marks]
1
     your MySQL username
     your MySQL password
     the DB name
We will use this file so that we don't have to hard-code our MySQL information into our program. Give this file permission 604 so Apache can read the contents of the file.
 Database:
In your database, create a table named book. Its structure is as follows. (note: you can define the column “isbn” in the order after “publishDate”). [2 marks]
 PHP Programs:
You need write four PHP programs described below.
Note: For this assignment, we emphasize the functionality rather than web design. My included screenshots are crude and simple to give you a basic idea about the requirements. Your pages can be different and you are always encouraged to present your creativity with a “better-looking” website. Also, your error messages could be better designed and presented.
  2

(1) addBook.php
Refer to the following screenshots:
 This page works as the starting page for this assignment. Displays an empty form when first invoked.
(screenshot 1)
The form is designed as the screenshot, i.e.,
fields: title, author, publishdate, category, and price are all defined as type “text” .
(Do not define publishdate as “date” type, which is not supported by Firefox) category: radio button with three options: hardcover, paperback, eBook. status: select menu, with four options: in stock, out of stock, pre-order, N/A rating: select menu, with six options: 0,1,2,3,4,5
note: textarea, 4 rows, 50 columns submit: type is submit.
clear: type is reset.
[2 marks]
 Create the two links: “Add a Book” and “View Books”.
 Click the link “Add a Book”, it will invoke the program “addBook.php”, i.e., the page itself. It will actually
reset the page to initial status with an empty form.
 Click the link “View Books”, it will invoke the program “viewBooks.php”. See details below.
 Click the button “Submit”, it will validate user’s input based on the rules below. If all valid, insert the
user’s input to the table “book”. If input is invalid, show error message beside the field in red. Refer to
screenshot (2) [4 marks]
 Validation rules:
Note: To practice back-end validation using PHP, you are not allowed to use HTML5 features for validation. For example, you cannot use HTML5 attribute “required” for required fields. Instead, you need to define php function to accomplish it.
a) fields: title, author, publishdate, category, and price are all required. They cannot be empty or only white spaces. Also, the leading and ending white spaces will not be considered valid for data
“book”), report error and will not insert it to the table “book”. See screenshot (3), where isbn
[2 marks]
     and need to be trimmed (function: trim())
b) publish date: input format as mm/dd/yyyy
c) isbn: no more than 13 positive integer.
d) isbn is supposed to be unique. So you also need to check if it is already in database (table:
1234 already exists.
e) price: non-negative numbers
 Display error messages:
display error messages in red beside the invalid fields. (see screenshot 3)
 Sticky form
If some fields are invalid, show error messages for user to correct. Meanwhile, display user’s other previously input. Your program cannot make the user to re-input everything for a single error field. Screeshot (3).
3
[4 marks] [2 marks] [2 marks]
[4 marks] [2 marks]
[5 marks] [4 marks]

Screenshot (1)
 4

Screenshot (2)
  5

Screenshot (3)
 6

(2) viewBooks.php [8 marks] refer to Screenshot (4)
 Include the possible link to “HOME”, which invokes the program "addBook.php" on click.
 Displays all books in your DB, one per line, in a tabular format (display only the book title, author, publish
date).
 At the end of each row there should be a link to view book details, which invokes the program
“viewDetails.php” on click. Screenshot (4)
 7

(3) viewDetails.php [6 marks] refer to Screenshot (5)
 Display all the information from the database about the book in a nice format
 Include the possible link to “HOME”, which invokes the program "addBook.php" on click.
Screenshot (5)
 8

(4) lib.php: function library [10 marks] Contains common code for this assignment, such as validation functions, database connection function, and
other common functions.
Require to define validation functions for each validation field.



