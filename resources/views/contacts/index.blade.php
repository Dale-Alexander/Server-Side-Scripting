<h1>All Contacts</h1>

<li><a href = "{{route('contacts.create')}}"> Add new Contact </a></li>
<!-- The above curly braces is called blade php syntax. It is the blade language.
It is a way to embed php and html together -->
<li><a href = "{{route('contacts.show', 2)}}">
    Show Contact
</a></li>