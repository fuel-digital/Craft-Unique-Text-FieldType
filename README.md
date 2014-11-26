Craft-Unique-Text-FieldType
===========================

A simple text FieldType plugin that validates the saved value is unique.

# Installation

Copy the uniquetextfield directory to your Craft plugins folder and install it in the Craft settings panel.

# Usage

Create a new Field of type Unique Text Field and use as required. The field is designed to be used with Entries, Users, Assets, basically any of the core Elements. When the field is validated, the plugin checks all other entries with the same handle and Element Type to ensure the value is unique.

For example if you have created a field with a handle of 'membershipId' and assigned that field to Users, when you create or edit a User, the plugin will ensure that each User has a unique value stored in this field. All other Element Types will ignored.