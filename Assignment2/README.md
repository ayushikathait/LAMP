Sol 1. -git diff HEAD commands let us view all the changes we have commited even if they are not in the staged area, whereas
       git diff --staged command let us view only the changes we have made int the staged area(or if we have added file with the changes to the staged area)

Sol2. There are three different ways to include CSS in an HTML file which are:
	External CSS - Each HTML page must include a reference to the external style sheet file inside the <link> element, inside the head section.
	Internal CSS - The internal style is defined inside the <style> element, inside the head section.
	Inline CSS - To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.
      There are two ways to include Javascript in an HTML file which are:
	Internal JS-
		in head - a JavaScript function(function myFunction()) is placed in the <head> section of an HTML page.
		in body - a JavaScript function(function myFunction()) is placed in the <body> section of an HTML page.
	External JS-
		To use an external script, put the name of the script file in the src (source) attribute of a <script> tag
			<script src="filename.js"></script>

Sol3. To remove double lines from the border of a table we can use the collapse border property.
	border-collapse: collapse;

Sol5. The id attribute specifies a unique id for an HTML element. The value of the id attribute must be unique within the HTML document.
      The id attribute is used to point to a specific style declaration in a style sheet.
      It is also used by JavaScript to access and manipulate the element with the specific id.
A class name can be used by multiple HTML elements, while an id name must only be used by one HTML element within the page otherwise we'll run into problems 
being able to work with these elements from JS, pass them as selectors to libraries/APIs/Flash, etc. –

 
