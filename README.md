# CI-Template-Loader
This is a CodeIgniter library that will streamline loading of headers, menus, sliders and footers on main view files.

# How to install
* Simply download this file and copy it to your libraries folder here:-
```
application/libraries
```
* Next, autoload it in your application by adding it to your autoloaded libraries
```php
$autoload['libraries'] = array('template','...');
```

* Now your view will be prepended with a header and appended with a footer. 
You can use it in the following style in all your controllers:
```php
$this->template->load('main/view/file/here', $viewData);
```

# Tweaking behaviors
* To change the location of the header and footer, open the file 
at application/libraries/template.php and edit the following lines to your preferences
```php
public $header = 'inc/header';
public $footer = 'inc/footer';
 	```
 	
 	* To change the usage verb to somethin else other than load, open the file at application/libraries/template.php and edit the public function name:
 	```php
 	public function load($views='', $data=''){
 	    // Library logic here...
 	}
 	```
 	Change to inject for example:
  ```php
 	public function inject($views='', $data=''){
 	    // Library logic here...
 	}
 	```
 	Then you will use the library in your controllers like this:
 	```php
 	$this->template->inject('my/view/file', $viewData);
 	```

 	


