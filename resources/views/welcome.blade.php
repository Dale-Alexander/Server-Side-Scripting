<h1>Welcome to SSS MCAST Lessons</h1>
<!-- <div>
    <li><a href =  "/contacts">All Contacts</a></li>
    <li><a href =  "/contacts/create">All Contact</a></li>
    <li><a href =  "/contacts/1">Show a contact</a></li>
</div> -->

<div>
    <li><a href =  "{{route('contacts.index')}}">All Contacts</a></li>
    <li><a href =  "{{route('contacts.create')}}">Add Contact</a></li>
    <li><a href =  "{{route('contacts.show', 2)}}">Show a contact</a></li>
</div>