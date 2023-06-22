## UrlText

### Description
URLText is a PHP program allows you to encode the text entered inside a textarea in Base64 and update the URL hash asynchronously, without having to reload the page. Additionally, the program handles 'popstate' events generated by the "Back" and "Forward" buttons of the browser, in order to restore the correct textarea text and URL hash. Finally, the program provides a "Share" button that enables the user to copy the URL link to the clipboard.

In the `url_text_bootstrap.php` file, I've added HTML code to create a web page with a user interface for the text editor, using the Bootstrap framework. This provides a more visually appealing and user-friendly interface for the editor.

### Usage
To use the program, simply enter the desired text inside the textarea and the text will be automatically encoded in Base64 and updated in the URL hash. The user can use the "Back" and "Forward" buttons of the browser to navigate the history and the textarea text will be correctly restored thanks to the 'popstate' event handling. Finally, the user can use the "Share" button to quickly copy the URL link to the clipboard.

### Possible uses
This program could be useful in various situations, such as:
- In a web application that allows editing of long text: using Base64 encoding for URL updates allows you to maintain the application state even when the page is refreshed.
- In a collaborative editing application: handling 'popstate' events keeps the contents synchronized between the various collaborating users, even when navigating through the history.
- In a file sharing application: the "Share" button allows you to quickly copy the URL link to the clipboard, simplifying the process of sharing files between users.

In general, this program can be used in any situation where you want to maintain the state of a web page, synchronize contents between collaborating users, or simplify the process of sharing files via link.

### Technologies used
- PHP
- JavaScript
- Bootstrap (only for `url_text_bootstrap.php`)

### License
The code of this program is released under the [MIT license](https://opensource.org/licenses/MIT).
