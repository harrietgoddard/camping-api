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

### `GET /regions/<id>`

Will return a region with the given id

### Campsites

### `GET /regions/<id>/campsites`

Will return a list of campsites in a region with the given id

### `GET /regions/<id>/campsites/<id>`

Will return a campsite with the given id
