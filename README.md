# fb-Scrape-via-API
facebook Scrape via API to any url using php

This a small code can get some data form any url , By facebook Graph API Explorer , All you need get a Access Token form facebook 

```
=== Query
  curl -i -X POST \
   -d "scrape=true" \
   -d "id=http%3A%2F%2Fwww.imdb.com%2F" \
   -d "access_token=<access token sanitized>" \
   "https://graph.facebook.com/v2.9/"
=== Access Token Info
  {
    "perms": [
      "publish_actions",
      "manage_pages",
      "pages_show_list",
      "publish_pages",
      "business_management",
      "public_profile"
    ],
    "user_id": 843158625813005,
    "app_id": 1021903561204223
  }
=== Parameters
- Query Parameters

  {
    "scrape": "true",
    "id": "http://www.imdb.com/"
  }
- POST Parameters

  {}
=== Response
  {
    "url": "http://www.imdb.com/",
    "type": "website",
    "title": "IMDb - Movies, TV and Celebrities",
    "image": [
      {
        "url": "http://ia.media-imdb.com/images/G/01/imdb/images/logos/imdb_fb_logo-1730868325._CB522736557_.png"
      }
    ],
    "description": "IMDb, the world's most popular and authoritative source for movie, TV and celebrity content.",
    "site_name": "IMDb",
    "updated_time": "2017-05-03T11:03:50+0000",
    "id": "414652589771",
    "application": {
      "id": "115109575169727",
      "name": "IMDb",
      "url": "http://www.imdb.com/"
    },
    "__debug__": {}
  }
=== Debug Information from Graph API Explorer
- https://developers.facebook.com/tools/explorer/1021903561204223?method=POST&path=%3Fscrape%3Dtrue%26id%3Dhttp%3A%2F%2Fwww.imdb.com%2F&version=v2.9
```
