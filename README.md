
# Contact Management System

The **Contact Management System** is a web application built with Laravel that allows users to efficiently manage their contacts. It includes features for creating, reading, updating, and deleting contacts, as well as sorting and searching capabilities.

## Features

### Contact Management

-   **Create Contacts**: Add new contacts with details such as name, email, phone number, and address.
-   **Read Contacts**: View a list of all contacts.
-   **Update Contacts**: Edit contact details.
-   **Delete Contacts**: Remove contacts from the system.

### Sorting and Filtering

-   **Sort Contacts**: Sort contacts by name or creation date.
-   **Search Contacts**: Search contacts by name or email for easy filtering.

## Installation

### Prerequisites

Before you begin, ensure you have the following installed:

-   PHP >= 8.1
-   Composer
-   MySQL or another compatible database

## Usage

### Creating a Contact

-   Navigate to the "Create Contact" page.
-   Fill in the required details (name, email, phone, address) and save.

### Searching and Sorting Contacts

-   Use the search bar to filter contacts by name or email.
-   Use sorting options to view contacts alphabetically or by the date they were added.

### Editing or Deleting a Contact

-   Click on a contact to view its details.
-   From the contact's page, you can either edit the information or delete the contact.

## Database Schema

The system uses a single table `contacts` that stores all contact details including:

-   **id**: The unique identifier for each contact.
-   **name**: The contact's name.
-   **email**: The contact's email address.
-   **phone**: The contact's phone number.
-   **address**: The contact's address.
-   **created_at**: The timestamp when the contact was added.
-   **updated_at**: The timestamp when the contact was last updated.

## Technologies Used

-   **Backend**: Laravel Framework
-   **Frontend**: Blade Templates
-   **Database**: MySQL

## Future Enhancements

-   **Pagination**: Implement pagination for large contact lists.
-   **Contact Groups**: Add functionality for organizing contacts into groups.
-   **Export Contacts**: Enable exporting contacts to CSV or Excel files.

## Contributing

Contributions are welcome! If you have suggestions or would like to contribute, feel free to open an issue or submit a pull request.
