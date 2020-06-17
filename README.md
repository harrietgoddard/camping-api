# happy.camper
API containing useful information on a selection of campsites across the UK

## General

All requests should:
* Use the basename [`https://happy.camper/api/`]
* Be sent using JSON and with the `Accept: application/json` header

## End Points

### Regions

### `GET /regions`

Will return a list of regions in the UK

#### Response (for each region)

* `id`
* `region_name`: string

### `GET /regions/<id>`

Will return a summary list of campsites associated with a region with the given id

#### Response

* `id`
* `campsite_name`: string
* `price`: string (formatted, for example £25.50)
* `town_city`: string
* `amenities`: array of strings
* `rating`: integer between 1 and 5

### Campsites

### `GET /campsites/<id>`

Will return campsite with the given id

#### Response

* `id`
* `region_id`
* `campsite_name`: string
* `price` : string (formatted, for example £25.50)
* `description`: string
* `address`: string
* `town_city`: string
* `postcode`: string
* `amenities`: array of strings
* `rating`: integer between 1 and 5
* `contact_no`: string
* `contact_email`: string

### Reviews

### `GET /campsites/<id>/reviews`

Will return a list of reviews associated with a campsite with the given id

### Response

* `id`
* `campsite_id`
* `date_posted`: format DD Month YYYY HH:MM
* `username`: string
* `rating`: integer between 1 and 5
* `review_description`: string

### Amenities

### `GET /amenities`

Will return a list of all available amenities in the data base

### Response

* `id`
* `amenity_name`: string