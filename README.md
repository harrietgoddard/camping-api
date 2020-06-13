# [happy.camper]
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
* `region`: string - name of region

### `GET /regions/<id>`

Will return a region with the given id

#### Response

* `id`
* `region`: string - name of region

### Campsites

### `GET /regions/<id>/campsites`

Will return a list of campsites in a region with the given id

#### Response

* `id`
* `campsite_name`: string
* `description`: string

### `GET /campsites/<id>`

Will return a campsite with the given id

#### Response

* `id`
* `campsite_name`: string
* `description`: string
* `address_1`: string
* `address_2`: string
* `town_city`: string
* `postcode`: string
* `amenities`: string
* `rating`: integer between 1 and 5
* `contact_no`: integer with 11 characters
* `contact_email`: string
