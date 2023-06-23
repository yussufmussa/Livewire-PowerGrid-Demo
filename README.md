[](https://i.ibb.co/hyC0v7L/Screenshot-from-2023-06-23-21-02-33.png)

# PowerGridComponent

This is a readme file for the PowerGridComponent. The PowerGridComponent is responsible for displaying data in a table format with various features such as export, search, pagination, and more.

## Features Setup

The table's general features are set up in the `setUp()` method. Currently, the following features are enabled:

- Export: Allows exporting data in XLS and CSV formats.
- Striped: Applies striped styling to the table rows.
- Search Input: Displays a search input field in the table header.
- Per Page: Shows the number of records per page.
- Record Count: Displays the total number of records in the table footer.

## Datasource

The data for the table is provided by the `datasource()` method, which returns a query builder instance for the `Booking` model.

## Relationship Search

The `relationSearch()` method configures the relationships to be used by the search and table filters. Currently, no relationships are configured for search.

## Add Column

The `addColumns()` method makes the datasource fields available as columns in the table. You can also use closures to transform or modify the data if needed.

## Include Columns

The `columns()` method includes the added columns, making them visible in the table. Currently, no columns are included.

The `filters()` method can be used to add filters to the table.

## Actions Method

The `actions()` method defines the action buttons for the table. However, this method is currently commented out.

## Actions Rules

The `actionRules()` method allows you to configure rules for the table's action buttons. Currently, this method is also commented out.

Please uncomment the relevant sections and customize the PowerGridComponent according to your specific requirements.
