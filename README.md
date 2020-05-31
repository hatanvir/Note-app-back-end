# Note-app-back-end

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

This is a simple practice project to learn lumen API development. I have integrated the endpoint to my [noteApp](https://github.com/hatanvir/Note-app-MVVM) android project. All endpoints are free. Anyone can practice API implementation on mobile, web, desktop.

## Endpoints
<pre>post = https://notes-app555.000webhostapp.com/api/register
body
name->varchar
email->varchar
password->varchar
password_confirmation->varchar

post = https://notes-app555.000webhostapp.com/api/login
body
email->varchar
password->varchar

post = https://notes-app555.000webhostapp.com/api/addNote
body
subject->varchar
description->varchar
user_id->int

post = https://notes-app555.000webhostapp.com/api/updateNote/{id} [id = noteId]
body
subject->varchar
description->varchar
user_id->int

get = https://notes-app555.000webhostapp.com/api/getNotesByUerId/{user_id}

post = https://notes-app555.000webhostapp.com/api/deleteNote/{user_id}/{note_id}
body
Nothing
</pre>

## Contact
<b>Email:</b> tanvirhasan553@gmail.com<br>
<b>LinkedIn:</b> https://www.linkedin.com/in/tanvir-hasan-a97940117/
