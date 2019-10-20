# Persistent checkboxes
A JavaScript function to store checkbox state to localStorage. Relies on JQuery.

Provides persistent storage of checkbox status for input checkboxes with
non-empty id attributes. These are stored in localStorage, so only browsers that
support localStorage will see checkboxes status stored.

Usage: Add a (unique) id attribute to every input checkbox for which you want to
provide persistant storage. Include this library. That's it.

At the bottom of the function is code that invoke the PersistantCheckboxes
function. This then loads any saved check boxes and place a listener on checkbox
changes, saving the status of every checkbox as it changes. You may want to
comment out that code an invoke the PersistantCheckboxes function when you see
fit.
