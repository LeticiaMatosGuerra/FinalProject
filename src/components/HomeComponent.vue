<template>
  <div v-if="dataIsReturn" class="HomePage">
    <!-- @ the name we gave in emit with the new array -->
    <SearchComponent @searchValue="this.searchVal" @returnList="this.searchRecipe" :recipesList="this.apiList"/>

    <!-- show all the results from the api if the check theres no slot in localResult -->
    
    <CardGalleryComponent :dishList="apiList" v-if="!this.checkSearch()"/> 
    <!-- if theres result show it -->
    <CardGalleryComponent :dishList="this.localResult" v-else/>

    <section class="pageBtn">
      <button @click="pageSelector('prev')">Prev</button>
      <button @click="pageSelector('next')">Next</button>
    </section>
  </div>
  <div><h1>Loading...</h1></div>
</template>


<script>
import CardGalleryComponent from './CardGalleryComponent.vue';
import SearchComponent from './SearchComponent.vue';



export default {
  name: 'HomePage',
  components: {
    CardGalleryComponent,
    SearchComponent,
  },

  data(){
    return {
      apiList:[
    {
      "topics": [
        {
          "name": "Bread Lovers",
          "slug": "bread"
        },
        {
          "name": "Sunday Brunch",
          "slug": "brunch"
        },
        {
          "name": "Healthy Eating",
          "slug": "healthy"
        },
        {
          "name": "Low Carb Meals",
          "slug": "low-carb-meals"
        },
        {
          "name": "Romantic Dinners",
          "slug": "romantic-dinners"
        },
        {
          "name": "Snacks",
          "slug": "snacks"
        },
        {
          "name": "American",
          "slug": "american"
        }
      ],
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/a0e1b07dc71c4ac6b378f24493ae2d85/FixedFBFinal.mp4",
      "name": "Low-Carb Avocado Chicken Salad",
      "tips_and_ratings_enabled": true,
      "credits": [
        {
          "name": "Isabel Castillo",
          "type": "internal"
        },
        {
          "name": "Karlee Rotoly",
          "type": "internal"
        }
      ],
      "total_time_tier": null,
      "video_ad_content": "none",
      "yields": "Servings: 4",
      "language": "eng",
      "show_id": 34,
      "servings_noun_plural": "servings",
      "aspect_ratio": "1:1",
      "show": {
        "name": "Goodful",
        "id": 34
      },
      "is_one_top": false,
      "canonical_id": "recipe:4704",
      "cook_time_minutes": 0,
      "id": 4704,
      "nutrition": {
        "protein": 29,
        "fat": 8,
        "calories": 250,
        "sugar": 8,
        "carbohydrates": 13,
        "fiber": 3,
        "updated_at": "2021-05-03T13:23:58+02:00"
      },
      "num_servings": 4,
      "created_at": 1546890315,
      "description": "This chicken salad is a lunchtime delight! Packed with creamy avocado, tender chicken, and crunchy veggies, it's a healthy and satisfying meal that won't weigh you down. Tossed in a tangy yogurt dressing with a hint of spice, it's a flavor explosion that's perfect for a light meal.",
      "promotion": "partial",
      "instructions": [
        {
          "appliance": null,
          "end_time": 26500,
          "temperature": null,
          "id": 43381,
          "position": 1,
          "display_text": "In a blender or food processor, combine the yogurt, lime juice, pepper, and chili powder and pulse to combine. Add ½ of the avocado and blend until creamy.",
          "start_time": 7000
        },
        {
          "end_time": 43500,
          "temperature": null,
          "id": 43382,
          "position": 2,
          "display_text": "In a medium bowl, combine the chicken, yogurt sauce, celery, the remaining ½ avocado, onion, and salt. Mix until well combined.",
          "start_time": 29000,
          "appliance": null
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 43383,
          "position": 3,
          "display_text": "Serve on low-carb bread and garnish with cilantro, or as desired."
        },
        {
          "id": 43384,
          "position": 4,
          "display_text": "Enjoy!",
          "start_time": 44666,
          "appliance": null,
          "end_time": 47166,
          "temperature": null
        }
      ],
      "sections": [
        {
          "name": null,
          "position": 1,
          "components": [
            {
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035261,
                "name": "plain greek yogurt",
                "created_at": 1495053532,
                "display_plural": "plain greek yogurts",
                "id": 428,
                "display_singular": "plain greek yogurt"
              },
              "id": 50242,
              "position": 1,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "⅔",
                  "id": 731945
                },
                {
                  "quantity": "190",
                  "id": 731942,
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  }
                }
              ],
              "raw_text": "⅔ cup plain Greek yogurt"
            },
            {
              "position": 2,
              "measurements": [
                {
                  "id": 731940,
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "1"
                }
              ],
              "raw_text": "1 tablespoon lime juice",
              "extra_comment": "",
              "ingredient": {
                "id": 330,
                "display_singular": "lime juice",
                "updated_at": 1509035269,
                "name": "lime juice",
                "created_at": 1494878288,
                "display_plural": "lime juices"
              },
              "id": 50243
            },
            {
              "id": 50244,
              "position": 3,
              "measurements": [
                {
                  "quantity": "0",
                  "id": 731943,
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  }
                }
              ],
              "raw_text": "Pepper, to taste",
              "extra_comment": "to taste",
              "ingredient": {
                "display_singular": "pepper",
                "updated_at": 1509035287,
                "name": "pepper",
                "created_at": 1493314935,
                "display_plural": "peppers",
                "id": 29
              }
            },
            {
              "raw_text": "⅛ teaspoon chili powder",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1493307101,
                "display_plural": "chili powders",
                "id": 7,
                "display_singular": "chili powder",
                "updated_at": 1509035289,
                "name": "chili powder"
              },
              "id": 50245,
              "position": 4,
              "measurements": [
                {
                  "id": 731949,
                  "unit": {
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon"
                  },
                  "quantity": "⅛"
                }
              ]
            },
            {
              "ingredient": {
                "updated_at": 1509035215,
                "name": "avocado",
                "created_at": 1496185911,
                "display_plural": "avocados",
                "id": 1005,
                "display_singular": "avocado"
              },
              "id": 50246,
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none",
                    "name": ""
                  },
                  "quantity": "1",
                  "id": 731941
                }
              ],
              "raw_text": "1 avocado, cubed, divided",
              "extra_comment": "cubed, divided"
            },
            {
              "extra_comment": "cooked and shredded",
              "ingredient": {
                "updated_at": 1509035286,
                "name": "chicken breast",
                "created_at": 1493430237,
                "display_plural": "chicken breasts",
                "id": 50,
                "display_singular": "chicken breast"
              },
              "id": 50247,
              "position": 6,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "2",
                  "id": 731944
                }
              ],
              "raw_text": "2 chicken breasts, cooked and shredded"
            },
            {
              "id": 50248,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "stalk",
                    "display_plural": "stalks",
                    "display_singular": "stalk",
                    "abbreviation": "stalk"
                  },
                  "quantity": "1",
                  "id": 731946
                }
              ],
              "raw_text": "1 celery stalk, diced",
              "extra_comment": "diced",
              "ingredient": {
                "name": "celery",
                "created_at": 1495082620,
                "display_plural": "celeries",
                "id": 458,
                "display_singular": "celery",
                "updated_at": 1509035259
              }
            },
            {
              "extra_comment": "diced",
              "ingredient": {
                "updated_at": 1681493252,
                "name": "diced red onion",
                "created_at": 1681493252,
                "display_plural": "diced red onions",
                "id": 11117,
                "display_singular": "diced red onion"
              },
              "id": 50249,
              "position": 8,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "2",
                  "id": 731951
                }
              ],
              "raw_text": "2 tablespoons diced red onion"
            },
            {
              "raw_text": "Kosher salt, to taste",
              "extra_comment": "to taste",
              "ingredient": {
                "display_singular": "kosher salt",
                "updated_at": 1509035289,
                "name": "kosher salt",
                "created_at": 1493307153,
                "display_plural": "kosher salts",
                "id": 11
              },
              "id": 50250,
              "position": 9,
              "measurements": [
                {
                  "id": 731947,
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0"
                }
              ]
            },
            {
              "ingredient": {
                "updated_at": 1682530849,
                "name": "low-carb bread",
                "created_at": 1682530849,
                "display_plural": "low-carb breads",
                "id": 11182,
                "display_singular": "low-carb bread"
              },
              "id": 50251,
              "position": 10,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0",
                  "id": 731948
                }
              ],
              "raw_text": "Low-carb bread, for serving, optional",
              "extra_comment": "for serving (optional)"
            },
            {
              "extra_comment": "for garnish",
              "ingredient": {
                "display_plural": "fresh cilantro leaves",
                "id": 4163,
                "display_singular": "fresh cilantro leaf",
                "updated_at": 1527199111,
                "name": "fresh cilantro leaves",
                "created_at": 1527199111
              },
              "id": 50252,
              "position": 11,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0",
                  "id": 731950
                }
              ],
              "raw_text": "Fresh cilantro leaves, for garnish"
            }
          ]
        }
      ],
      "tags": [
        {
          "type": "cuisine",
          "root_tag_type": "cuisine",
          "name": "north_american",
          "id": 64444,
          "display_name": "North American"
        },
        {
          "name": "healthy",
          "id": 64466,
          "display_name": "Healthy",
          "type": "healthy",
          "root_tag_type": "healthy"
        },
        {
          "id": 64467,
          "display_name": "Low-Carb",
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "low_carb"
        },
        {
          "type": "difficulty",
          "root_tag_type": "difficulty",
          "name": "easy",
          "id": 64471,
          "display_name": "Easy"
        },
        {
          "root_tag_type": "meal",
          "name": "brunch",
          "id": 64484,
          "display_name": "Brunch",
          "type": "meal"
        },
        {
          "root_tag_type": "meal",
          "name": "snacks",
          "id": 64491,
          "display_name": "Snacks",
          "type": "meal"
        },
        {
          "root_tag_type": "appliance",
          "name": "food_processor",
          "id": 65842,
          "display_name": "Food Processor",
          "type": "appliance"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "spatula",
          "id": 1247788,
          "display_name": "Spatula"
        },
        {
          "display_name": "Chef's Knife",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "chefs_knife",
          "id": 1280501
        },
        {
          "root_tag_type": "equipment",
          "name": "cutting_board",
          "id": 1280503,
          "display_name": "Cutting Board",
          "type": "equipment"
        },
        {
          "display_name": "Dry Measuring Cups",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "dry_measuring_cups",
          "id": 1280507
        },
        {
          "root_tag_type": "equipment",
          "name": "measuring_spoons",
          "id": 1280508,
          "display_name": "Measuring Spoons",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "mixing_bowl",
          "id": 1280510,
          "display_name": "Mixing Bowl",
          "type": "equipment"
        },
        {
          "root_tag_type": "healthy",
          "name": "high_protein",
          "id": 8091917,
          "display_name": "High-Protein",
          "type": "healthy"
        },
        {
          "root_tag_type": "cuisine",
          "name": "cuisine",
          "id": 8757513,
          "display_name": "Cuisine",
          "type": "cuisine"
        },
        {
          "id": 9295811,
          "display_name": "Appliance",
          "type": "appliance",
          "root_tag_type": "appliance",
          "name": "appliance"
        },
        {
          "root_tag_type": "difficulty",
          "name": "difficulty",
          "id": 9295816,
          "display_name": "Difficulty",
          "type": "difficulty"
        }
      ],
      "brand_id": null,
      "compilations": [
        {
          "name": "Protein-Packed Snacks",
          "id": 848,
          "beauty_url": null,
          "buzz_id": null,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/199563.jpg",
          "video_url": "https://vid.tasty.co/output/121934/hls24_1546897597.m3u8",
          "is_shoppable": true,
          "keywords": null,
          "created_at": 1546890391,
          "description": "Whether you’re trying to be healthy, pulling an all-nighter, or just trying to get through the day, protein-packed snacks are your best friends. That’s because protein can give you an energy boost and help you stay fuller longer. From <a href=\"https://tasty.co/recipe/avocado-deviled-eggs\">avocado deviled eggs</a> to <a href=\"https://tasty.co/recipe/cacao-chia-pudding\">cacao chia pudding</a>, these snacks are full of protein-packed ingredients like Greek yogurt and almond butter, which will ensure you don’t get hangry anytime soon.",
          "canonical_id": "compilation:848",
          "promotion": "partial",
          "aspect_ratio": "1:1",
          "country": "US",
          "facebook_posts": [],
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "approved_at": 1553197578,
          "slug": "protein-packed-snacks",
          "video_id": 73153
        },
        {
          "aspect_ratio": "1:1",
          "keywords": null,
          "description": null,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/250396.jpg",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/156634/hls24_1578291102.m3u8",
          "approved_at": 1578330513,
          "id": 1353,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "name": "5 Easy & Healthy Avocado Recipes",
          "canonical_id": "compilation:1353",
          "beauty_url": null,
          "country": "US",
          "is_shoppable": false,
          "draft_status": "published",
          "video_id": 98266,
          "facebook_posts": [],
          "created_at": 1578291052,
          "buzz_id": null,
          "slug": "5-easy-healthy-avocado-recipes",
          "promotion": "full"
        },
        {
          "id": 1403,
          "video_id": 101158,
          "created_at": 1582700418,
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/161151/hls24_1582700566.m3u8",
          "canonical_id": "compilation:1403",
          "country": "US",
          "is_shoppable": false,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "approved_at": 1582859703,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/256517.jpg",
          "buzz_id": null,
          "slug": "healthy-and-delicious-appetisers",
          "promotion": "full",
          "facebook_posts": [],
          "description": null,
          "draft_status": "published",
          "language": "eng",
          "aspect_ratio": "1:1",
          "keywords": null,
          "name": "Healthy And Delicious Appetisers ",
          "beauty_url": null
        },
        {
          "promotion": "full",
          "thumbnail_alt_text": "",
          "keywords": null,
          "created_at": 1598634358,
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/280958.jpg",
          "video_url": "https://vid.tasty.co/output/177500/hls24_1598874098.m3u8",
          "canonical_id": "compilation:1675",
          "aspect_ratio": "1:1",
          "id": 1675,
          "slug": "healthy-snacks-for-late-night-cravings",
          "approved_at": 1599571488,
          "is_shoppable": false,
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "description": "Can't sleep? Want to snack? These delicious snacks are a quick and easy fix to all your after-midnight hunger pangs. Chomp down on some <a href= \"https://tasty.co/recipe/hummus-and-carrot-sticks\">hummus and carrot sticks</a> or devour a couple handfuls of delicious <a href= \"https://tasty.co/recipe/spicy-roasted-chickpeas\">oven-roasted chickpeas</a>. And once you're full and satisfied, sail softly back into dreamland!",
          "language": "eng",
          "name": "Healthy Snacks For Late-night Cravings",
          "beauty_url": null,
          "country": "US",
          "video_id": 111496,
          "buzz_id": null
        },
        {
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/322976.jpg",
          "is_shoppable": false,
          "facebook_posts": [],
          "draft_status": "published",
          "beauty_url": null,
          "buzz_id": null,
          "promotion": "full",
          "video_id": 132618,
          "aspect_ratio": "1:1",
          "language": "eng",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/203549/hls24_1621588827.m3u8",
          "canonical_id": "compilation:2455",
          "id": 2455,
          "description": "Planning a trip to the beach to celebrate the coming of summer? These easy snacks will make sure you're fueled and ready for the next game of water polo. From <a href=\"https://tasty.co/recipe/garlic-parmesan-and-herb-pita-chips\">parmesan garlic & herb pita chips</a> to super easy to make <a href=\"https://tasty.co/recipe/after-school-banana-roll-ups\">banana roll-ups</a>, these treats are beach-friendly and hassle free. So what are you waiting for? Pack up your picnic basket with these goodies: summer's here! ",
          "keywords": null,
          "created_at": 1621947459,
          "approved_at": 1622033473,
          "name": "Easy Snacks To Pack For Your Next Beach Trip",
          "slug": "easy-snacks-to-pack-for-your-next-beach-trip",
          "country": "US"
        },
        {
          "draft_status": "published",
          "is_shoppable": false,
          "keywords": null,
          "description": "Looking for low-carb options? We've got plenty for you! The crispy <a href=\"https://tasty.co/recipe/easy-chicken-piccata\">Chicken Piccata</a> and the saucy <a href=\"https://tasty.co/recipe/ratatouille\">Ratatouille Lasagna</a> each pack tons of flavor without going overboard on carbs — and they pair well with just about anything. The hardest part? Choosing which dish to make first!",
          "beauty_url": null,
          "country": "US",
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1622179434,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/324268.jpg",
          "name": "Low Carb Meals For A Healthy You",
          "canonical_id": "compilation:2471",
          "id": 2471,
          "promotion": "full",
          "aspect_ratio": "1:1",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/204325/hls24_1622182197.m3u8",
          "approved_at": 1622729093,
          "buzz_id": null,
          "slug": "low-carb-meals-for-a-healthy-you",
          "video_id": 131584
        },
        {
          "is_shoppable": false,
          "facebook_posts": [],
          "beauty_url": null,
          "buzz_id": null,
          "video_id": 138926,
          "aspect_ratio": "1:1",
          "draft_status": "published",
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/340641.jpg",
          "thumbnail_alt_text": "",
          "id": 2741,
          "slug": "31-days-31-avocado-recipes",
          "keywords": null,
          "video_url": "https://vid.tasty.co/output/214898/hls24_1630573823.m3u8",
          "approved_at": 1630615490,
          "name": "31 Days 31 Avocado Recipes ",
          "country": "US",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1628697577,
          "description": " You can never go wrong with avocado, and these easy mouthwatering recipes can enjoyed at any time of the day. Start your day with a wholesome <a href=\"https://tasty.co/recipe/radish-avocado-toast\">Raddish Avocado Toast</a> or enjoy a <a href=\"https://tasty.co/recipe/salmon-crab-stack\">Salmon Crab Seafood Stack</a> on a lunch date with your special someone. But why settle for one when you have 31 options to try from? Avo-fun for the whole month! ",
          "canonical_id": "compilation:2741",
          "promotion": "full"
        },
        {
          "facebook_posts": [],
          "created_at": 1631878927,
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/342984.jpg",
          "buzz_id": null,
          "country": "US",
          "approved_at": 1632837818,
          "canonical_id": "compilation:2823",
          "promotion": "full",
          "name": "Make Healthy Snacks Tasty With These Recipes",
          "slug": "make-healthy-snacks-tasty-with-these-recipes",
          "aspect_ratio": "1:1",
          "keywords": null,
          "description": null,
          "language": "eng",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/216394/hls24_1631879337.m3u8",
          "video_id": 141660,
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "id": 2823,
          "beauty_url": null
        },
        {
          "slug": "recipes-for-when-you-don-t-feel-like-working-out",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "draft_status": "published",
          "thumbnail_url": "https://s3.amazonaws.com/video-api-prod/assets/5aadea18cb1043cda94b0b830f660c55/FB1.jpg",
          "canonical_id": "compilation:2850",
          "id": 2850,
          "beauty_url": null,
          "buzz_id": null,
          "video_id": 142328,
          "is_shoppable": false,
          "facebook_posts": [],
          "created_at": 1632478266,
          "language": "eng",
          "name": "Recipes For When You Don't Feel Like Working Out",
          "description": "We've all had those days when you just don't feel like working out. Regardless of whether or not you make it to the gym, these recipes will keep you feeling engaged, alert, and fueled up for whatever comes your way. From <a href=\"https://tasty.co/recipe/keto-caprese-avocado-bowls\">caprese avocado bowls</a> to <a href=\"https://tasty.co/recipe/spinach-pasta\">spinach pasta</a>, these meals are nutritious, delicious, and nourishing.",
          "video_url": "https://vid.tasty.co/output/217137/hls24_1632478454.m3u8",
          "aspect_ratio": null,
          "country": "US",
          "keywords": null,
          "thumbnail_alt_text": "",
          "approved_at": 1633453142,
          "promotion": "full"
        },
        {
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1669724060,
          "description": "With so many health benefits, you ought to use yogurt wisely and creatively! It is easy to digest, packed with vitamins, and a rich source of protein as well. Make the <a href=\"https://tasty.co/recipe/honey-granola-yogurt-bark\">Honey Granola Yogurt Bark</a> for your on-the-go meals. <a href=\"https://tasty.co/recipe/paprika-spiced-chicken-with-lemon-yogurt-and-crispy-potatoes\">Paprika-Spiced Chicken With Lemon Yogurt And Crispy Potatoes</a> is the perfect dinner recipe as it is delicious, easy and healthy, all at the same time!",
          "draft_status": "published",
          "buzz_id": null,
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "name": "Use Your Yogurt Wisely!",
          "beauty_url": null,
          "slug": "use-your-yogurt-wisely",
          "video_id": 175189,
          "facebook_posts": [],
          "language": "eng",
          "promotion": "full",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/413697.jpg",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/264265/hls24_1669784196.m3u8",
          "approved_at": 1670282994,
          "canonical_id": "compilation:3382",
          "id": 3382,
          "country": "US",
          "keywords": null
        }
      ],
      "inspired_by_url": null,
      "thumbnail_alt_text": "",
      "seo_path": null,
      "brand": null,
      "servings_noun_singular": "serving",
      "buzz_id": null,
      "draft_status": "published",
      "total_time_minutes": null,
      "video_url": "https://vid.tasty.co/output/121934/hls24_1546897597.m3u8",
      "updated_at": 1683305946,
      "country": "US",
      "price": {
        "consumption_total": 900,
        "consumption_portion": 200,
        "total": 1800,
        "updated_at": "2023-07-02T07:16:20+02:00",
        "portion": 450
      },
      "prep_time_minutes": 0,
      "is_shoppable": true,
      "seo_title": "",
      "video_id": 73153,
      "approved_at": 1553195044,
      "renditions": [
        {
          "duration": 217498,
          "bit_rate": 1491,
          "width": 720,
          "name": "mp4_720x720",
          "maximum_bit_rate": null,
          "height": 720,
          "container": "mp4",
          "url": "https://vid.tasty.co/output/121934/square_720/1546897597",
          "content_type": "video/mp4",
          "aspect": "square",
          "minimum_bit_rate": null,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/121934/square_720/1546897597_00001.png",
          "file_size": 40535808
        },
        {
          "aspect": "square",
          "width": 320,
          "container": "mp4",
          "file_size": 14280746,
          "duration": 217498,
          "bit_rate": 526,
          "content_type": "video/mp4",
          "minimum_bit_rate": null,
          "name": "mp4_320x320",
          "maximum_bit_rate": null,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/121934/square_320/1546897597_00001.png",
          "url": "https://vid.tasty.co/output/121934/square_320/1546897597",
          "height": 320
        },
        {
          "content_type": "video/mp4",
          "width": 720,
          "maximum_bit_rate": null,
          "height": 720,
          "container": "mp4",
          "file_size": 40496760,
          "url": "https://vid.tasty.co/output/121934/landscape_720/1546897597",
          "duration": 217498,
          "name": "mp4_720x720",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/121934/landscape_720/1546897597_00001.png",
          "bit_rate": 1490,
          "aspect": "square",
          "minimum_bit_rate": null
        },
        {
          "aspect": "square",
          "width": 480,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/121934/landscape_480/1546897597_00001.png",
          "file_size": 23426496,
          "duration": 217498,
          "bit_rate": 862,
          "content_type": "video/mp4",
          "height": 480,
          "url": "https://vid.tasty.co/output/121934/landscape_480/1546897597",
          "minimum_bit_rate": null,
          "name": "mp4_480x480",
          "maximum_bit_rate": null
        },
        {
          "name": "low",
          "maximum_bit_rate": 2684,
          "height": 1080,
          "container": "ts",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/121934/1445289064805-h2exzu/1546897597_00001.png",
          "file_size": null,
          "content_type": "application/vnd.apple.mpegurl",
          "aspect": "square",
          "url": "https://vid.tasty.co/output/121934/hls24_1546897597.m3u8",
          "duration": 217509,
          "bit_rate": null,
          "width": 1080,
          "minimum_bit_rate": 273
        }
      ],
      "beauty_url": null,
      "user_ratings": {
        "count_positive": 736,
        "score": 0.918851,
        "count_negative": 65
      },
      "slug": "low-carb-avocado-chicken-salad",
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/45b4efeb5d2c4d29970344ae165615ab/FixedFBFinal.jpg",
      "nutrition_visibility": "auto",
      "keywords": "avocado, chia pudding, chicken salad, chickpea chips, deviled eggs, easy, healthy, keto, protein, snacks, vegan, vegetarian",
      "facebook_posts": []
    },
    {
      "show": {
        "id": 17,
        "name": "Tasty"
      },
      "created_at": 1562853218,
      "nutrition_visibility": "auto",
      "country": "US",
      "id": 5431,
      "brand": null,
      "prep_time_minutes": 0,
      "tags": [
        {
          "root_tag_type": "cooking_style",
          "name": "comfort_food",
          "id": 64462,
          "display_name": "Comfort Food",
          "type": "cooking_style"
        },
        {
          "root_tag_type": "meal",
          "name": "desserts",
          "id": 64485,
          "display_name": "Desserts",
          "type": "meal"
        },
        {
          "root_tag_type": "appliance",
          "name": "baking",
          "id": 64492,
          "display_name": "Baking",
          "type": "appliance"
        },
        {
          "display_name": "Indulgent Sweets",
          "type": "occasion",
          "root_tag_type": "occasion",
          "name": "indulgent_sweets",
          "id": 65850
        },
        {
          "root_tag_type": "cooking_style",
          "name": "mashup",
          "id": 65852,
          "display_name": "Mashup",
          "type": "cooking_style"
        },
        {
          "display_name": "Special Occasion",
          "type": "occasion",
          "root_tag_type": "seasonal",
          "name": "special_occasion",
          "id": 188967
        }
      ],
      "total_time_minutes": 0,
      "total_time_tier": null,
      "canonical_id": "recipe:5431",
      "video_id": null,
      "sections": [
        {
          "components": [
            {
              "measurements": [
                {
                  "unit": {
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric"
                  },
                  "quantity": "450",
                  "id": 602690
                },
                {
                  "unit": {
                    "system": "imperial",
                    "name": "ounce",
                    "display_plural": "oz",
                    "display_singular": "oz",
                    "abbreviation": "oz"
                  },
                  "quantity": "16",
                  "id": 602689
                }
              ],
              "raw_text": "16 ounces cream cheese, softened",
              "extra_comment": "softened",
              "ingredient": {
                "updated_at": 1509035276,
                "name": "cream cheese",
                "created_at": 1494297000,
                "display_plural": "cream cheeses",
                "id": 242,
                "display_singular": "cream cheese"
              },
              "id": 58220,
              "position": 1
            },
            {
              "ingredient": {
                "id": 24,
                "display_singular": "sugar",
                "updated_at": 1509035288,
                "name": "sugar",
                "created_at": 1493314650,
                "display_plural": "sugars"
              },
              "id": 58221,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "½",
                  "id": 602688
                },
                {
                  "quantity": "100",
                  "id": 602687,
                  "unit": {
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric"
                  }
                }
              ],
              "raw_text": "½ cup sugar",
              "extra_comment": ""
            },
            {
              "id": 58222,
              "position": 3,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "½",
                  "id": 602692
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "120",
                  "id": 602691
                }
              ],
              "raw_text": "½ cup sour cream",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "sour cream",
                "updated_at": 1509035256,
                "name": "sour cream",
                "created_at": 1495154479,
                "display_plural": "sour creams",
                "id": 496
              }
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1",
                  "id": 602683
                }
              ],
              "raw_text": "1 teaspoon vanilla extract",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035284,
                "name": "vanilla extract",
                "created_at": 1493745620,
                "display_plural": "vanilla extracts",
                "id": 103,
                "display_singular": "vanilla extract"
              },
              "id": 58223,
              "position": 4
            },
            {
              "position": 5,
              "measurements": [
                {
                  "id": 602680,
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "2"
                }
              ],
              "raw_text": "2 eggs",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "egg",
                "updated_at": 1509035288,
                "name": "egg",
                "created_at": 1493314622,
                "display_plural": "eggs",
                "id": 19
              },
              "id": 58224
            },
            {
              "id": 58225,
              "position": 6,
              "measurements": [
                {
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "½",
                  "id": 602685
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "115",
                  "id": 602684
                }
              ],
              "raw_text": "⅓ cup butter, melted",
              "extra_comment": "melted",
              "ingredient": {
                "updated_at": 1509035287,
                "name": "butter",
                "created_at": 1493314940,
                "display_plural": "butters",
                "id": 30,
                "display_singular": "butter"
              }
            },
            {
              "ingredient": {
                "updated_at": 1509035239,
                "name": "light brown sugar",
                "created_at": 1495671124,
                "display_plural": "light brown sugars",
                "id": 707,
                "display_singular": "light brown sugar"
              },
              "id": 58226,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "½",
                  "id": 602682
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "100",
                  "id": 602681
                }
              ],
              "raw_text": "½ cup light brown sugar",
              "extra_comment": ""
            },
            {
              "raw_text": "2 tablespoon. cinnamon",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "cinnamon",
                "updated_at": 1509035283,
                "name": "cinnamon",
                "created_at": 1493906374,
                "display_plural": "cinnamons",
                "id": 152
              },
              "id": 58227,
              "position": 8,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "2",
                  "id": 602679
                }
              ]
            },
            {
              "id": 58228,
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "packages",
                    "display_singular": "package",
                    "abbreviation": "package",
                    "system": "none",
                    "name": "package"
                  },
                  "quantity": "1",
                  "id": 602686
                }
              ],
              "raw_text": "1 pack refrigerated cinnamon rolls with frosting (8 regular sized)",
              "extra_comment": "with frosting",
              "ingredient": {
                "display_plural": "refrigerated cinnamon rolls",
                "id": 5581,
                "display_singular": "refrigerated cinnamon roll",
                "updated_at": 1562853343,
                "name": "refrigerated cinnamon rolls",
                "created_at": 1562853343
              }
            }
          ],
          "name": null,
          "position": 1
        }
      ],
      "is_shoppable": true,
      "video_ad_content": null,
      "instructions": [
        {
          "end_time": 0,
          "temperature": 325,
          "id": 48855,
          "position": 1,
          "display_text": "Preheat oven to 325°F/160°C.",
          "start_time": 0,
          "appliance": "oven"
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48856,
          "position": 2,
          "display_text": "In a bowl, beat the cream cheese and sugar until smooth.",
          "start_time": 0
        },
        {
          "temperature": null,
          "id": 48857,
          "position": 3,
          "display_text": "Add the sour cream and vanilla, and beat until there are no lumps.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48858,
          "position": 4,
          "display_text": "Add the eggs one at a time, mixing completely after each one.  Set aside."
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48859,
          "position": 5,
          "display_text": "In another bowl, mix the butter, brown sugar, and cinnamon until fully combined.  Set aside."
        },
        {
          "id": 48860,
          "position": 6,
          "display_text": "In a greased springform pan, press all of the cinnamon rolls flat, until they completely cover the bottom of the pan.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48861,
          "position": 7,
          "display_text": "Evenly spread the cheesecake batter, then drop spoonfuls of the butter mixture onto the cheesecake batter.",
          "start_time": 0
        },
        {
          "id": 48862,
          "position": 8,
          "display_text": "Swirl the butter mixture into the cheesecake using a knife (try to keep it away from the edges!).",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "temperature": null,
          "id": 48863,
          "position": 9,
          "display_text": "Bake for 30-35 minutes, until the cheesecake is firm around the edges but still slightly jiggly in the middle.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48864,
          "position": 10,
          "display_text": "Remove from oven and cool completely.",
          "start_time": 0
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48865,
          "position": 11,
          "display_text": "Top with frosting from the cinnamon rolls."
        },
        {
          "id": 48866,
          "position": 12,
          "display_text": "Refrigerate at least 4 hours.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 48867,
          "position": 13,
          "display_text": "Enjoy!"
        }
      ],
      "seo_path": null,
      "buzz_id": null,
      "draft_status": "published",
      "inspired_by_url": null,
      "approved_at": 1562857615,
      "user_ratings": {
        "count_positive": 250,
        "score": 0.954198,
        "count_negative": 12
      },
      "price": {
        "portion": 150,
        "consumption_total": 500,
        "consumption_portion": 50,
        "total": 1100,
        "updated_at": "2023-07-02T07:18:47+02:00"
      },
      "brand_id": null,
      "num_servings": 8,
      "is_one_top": false,
      "promotion": "partial",
      "updated_at": 1683305922,
      "servings_noun_plural": "servings",
      "keywords": "",
      "facebook_posts": [],
      "slug": "cinnamon-roll-cheesecake",
      "show_id": 17,
      "compilations": [
        {
          "is_shoppable": false,
          "created_at": 1590754985,
          "draft_status": "published",
          "slug": "for-cinnamon-lovers-only",
          "aspect_ratio": "1:1",
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "description": null,
          "video_url": "https://vid.tasty.co/output/168737/hls24_1590755050.m3u8",
          "canonical_id": "compilation:1510",
          "id": 1510,
          "buzz_id": null,
          "video_id": 105362,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/267705.jpg",
          "name": "For Cinnamon Lovers Only",
          "promotion": "full",
          "country": "US",
          "facebook_posts": [],
          "thumbnail_alt_text": "",
          "approved_at": 1592314202,
          "beauty_url": null
        },
        {
          "thumbnail_alt_text": "",
          "name": "Chocolate vs Cinnamon Lover",
          "beauty_url": null,
          "country": "US",
          "created_at": 1595236483,
          "description": "Whether you're in the mood for chocolate or for cinnamon, we've got you covered. These easy and tasty sweet treats cover all the bases for the season. Start with crowd-pleasing classics like <a href=\"https://tasty.co/recipe/cinnamon-roll-cheesecake\">cinnamon roll cheesecake</a> or try a modern and Instagram-ready treat like this <a href=\"https://tasty.co/recipe/magic-chocolate-ball\">magic chocolate ball</a>. Whatever you choose, just know that these recipes are loved by all.\n \n",
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/274823.jpg",
          "slug": "chocolate-vs-cinnamon-lover",
          "promotion": "full",
          "facebook_posts": [],
          "approved_at": 1599657884,
          "canonical_id": "compilation:1586",
          "id": 1586,
          "aspect_ratio": "1:1",
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "video_url": "https://vid.tasty.co/output/173566/hls24_1595237041.m3u8",
          "video_id": 108662,
          "is_shoppable": false,
          "draft_status": "published",
          "buzz_id": null
        },
        {
          "slug": "ultimate-cheesecake-marathon",
          "aspect_ratio": "1:1",
          "country": "US",
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "approved_at": 1599139266,
          "id": 1665,
          "buzz_id": null,
          "facebook_posts": [],
          "language": "eng",
          "promotion": "full",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1598246765,
          "video_url": "https://vid.tasty.co/output/176795/hls24_1598247165.m3u8",
          "beauty_url": null,
          "is_shoppable": false,
          "keywords": null,
          "description": "Hey there! You look like you've had a long day. How about taking a break and spending some time drooling over some stunning & delicious cheesecakes? Try an assortment of quick & easy no bake cheesecakes and or test your baking skills with this super fancy <a href=\"https://tasty.co/recipe/triple-decker-cheesecake-tower\n\">cheesecake tower!</a> Turn up that microwave and let's start baking!",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/279749.jpg",
          "name": "Ultimate Cheesecake Marathon",
          "canonical_id": "compilation:1665",
          "video_id": 110914
        },
        {
          "beauty_url": null,
          "buzz_id": null,
          "aspect_ratio": "1:1",
          "country": "US",
          "video_url": "https://vid.tasty.co/output/183423/hls24_1603994619.m3u8",
          "name": "Cinnamon Roll Recipes",
          "slug": "cinnamon-roll-recipes",
          "video_id": 117119,
          "description": "Every special occasion feels incomplete without the wonderful smell of cinnamon wafting through the air. But why settle for regular cinnamon rolls when you can take it up a notch! From everyone's favorite classic <a href=\"https://tasty.co/recipe/cinnamon-roll-apple-pie\">Cinnamon Roll Apple Pie</a> to Instagram-worthy <a href=\"https://tasty.co/recipe/cinnamon-roll-waffles\">Cinnamon Roll Waffle</a>, these recipes are sure to make every celebration unforgettable!",
          "thumbnail_alt_text": "",
          "approved_at": 1604587937,
          "id": 1776,
          "is_shoppable": false,
          "keywords": null,
          "created_at": 1603993767,
          "draft_status": "published",
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/290441.jpg",
          "canonical_id": "compilation:1776",
          "promotion": "full",
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ]
        },
        {
          "created_at": 1608011997,
          "description": "Everything tastes better with cinnamon! Spice up your mornings with some <a href=\"https://tasty.co/recipe/apple-cinnamon-steel-cut-oatmeal\">Apple Cinnamon Steel Cut Oatmeal</a> or indulge in a stack of delicious <a href=\"https://tasty.co/recipe/cinnamon-roll-pancakes-with-chloe-coscarelli\">Cinnamon Roll Pancakes</a>. Make yourself a jar of <a href=\"https://tasty.co/recipe/cinnamon-honey-almond-butter\">Cinnamon Honey Almond Butter</a> to pair with toast or your favorite fruits for lunch and bake some <a href=\"https://tasty.co/recipe/sheet-tray-maple-cinnamon-trail-mix\">Sheet Tray Maple Cinnamon Trail Mix</a> to munch on through the day! ",
          "video_url": "https://vid.tasty.co/output/186479/hls24_1606377164.m3u8",
          "approved_at": 1608213512,
          "buzz_id": null,
          "is_shoppable": false,
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "name": "Recipes For Cinnamon Lovers",
          "canonical_id": "compilation:1938",
          "beauty_url": null,
          "slug": "recipes-for-cinnamon-lovers",
          "promotion": "full",
          "keywords": null,
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/295898.jpg",
          "id": 1938,
          "video_id": 118160,
          "aspect_ratio": "1:1",
          "country": "US",
          "language": "eng"
        },
        {
          "is_shoppable": false,
          "promotion": "full",
          "thumbnail_alt_text": "",
          "canonical_id": "compilation:3282",
          "slug": "dangerously-delicious-desserts",
          "video_id": 165006,
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1660553111,
          "description": "These recipes all prove one fact: not all sins are bad. It’s time to dive deep into the delicious world of gluttony. If you choose to partake in this culinary crime, make sure you do it in the most delicious way; the guilty pleasure of <a href=\"https://tasty.co/recipe/cinnamon-roll-cheesecake\">Cinnamon Roll Cheesecake</a> or <a href=\"https://tasty.co/recipe/chocolate-pancakes\">Chocolate Pancakes</a> is the one to remember for ages!",
          "video_url": "https://vid.tasty.co/output/250173/hls24_1660553080.m3u8",
          "id": 3282,
          "aspect_ratio": "1:1",
          "facebook_posts": [],
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/393612.jpg",
          "beauty_url": null,
          "buzz_id": null,
          "country": "US",
          "draft_status": "published",
          "approved_at": 1662751164,
          "name": "Dangerously Delicious Desserts!"
        }
      ],
      "tips_and_ratings_enabled": true,
      "renditions": [],
      "seo_title": "",
      "yields": "8 Servings",
      "language": "eng",
      "description": "Get ready for a dessert extravaganza with this cinnamon roll cheesecake! Creamy cheesecake filling is baked atop a cinnamon roll crust with a swirl of cinnamon sugar and a final icing glaze for an extra-sweet touch. With all the flavors of a classic cinnamon roll in a decadent cheesecake form, it's a showstopper that'll have everyone asking for seconds!",
      "beauty_url": null,
      "topics": [
        {
          "name": "Desserts",
          "slug": "desserts"
        }
      ],
      "cook_time_minutes": 0,
      "original_video_url": null,
      "servings_noun_singular": "serving",
      "nutrition": {
        "updated_at": "2019-07-13T08:00:55+02:00",
        "protein": 7,
        "fat": 37,
        "calories": 531,
        "sugar": 30,
        "carbohydrates": 44,
        "fiber": 1
      },
      "name": "Cinnamon Roll Cheesecake",
      "thumbnail_url": "https://img.buzzfeed.com/tasty-app-user-assets-prod-us-east-1/recipes/858de8a1025d44a69641254e25bde14a.png",
      "video_url": null,
      "credits": [
        {
          "name": null,
          "type": "internal"
        }
      ],
      "aspect_ratio": "16:9",
      "thumbnail_alt_text": ""
    },
    {
      "inspired_by_url": null,
      "total_time_minutes": 0,
      "credits": [
        {
          "name": "Rie McClenny",
          "type": "internal"
        }
      ],
      "country": "US",
      "seo_path": null,
      "price": {
        "total": 1700,
        "updated_at": "2023-07-02T07:18:57+02:00",
        "portion": 450,
        "consumption_total": 1200,
        "consumption_portion": 300
      },
      "id": 5466,
      "brand_id": null,
      "is_shoppable": true,
      "video_ad_content": "none",
      "cook_time_minutes": 0,
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "aspect_ratio": "1:1",
      "servings_noun_plural": "servings",
      "beauty_url": null,
      "topics": [
        {
          "name": "Dinner",
          "slug": "dinner"
        },
        {
          "name": "Pasta",
          "slug": "pasta"
        },
        {
          "name": "American",
          "slug": "american"
        }
      ],
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/85b5dc4294914e6b80ba2f128aaaa023/FB.mp4",
      "draft_status": "published",
      "is_one_top": false,
      "canonical_id": "recipe:5466",
      "brand": null,
      "show_id": 17,
      "sections": [
        {
          "components": [
            {
              "extra_comment": "",
              "ingredient": {
                "display_plural": "unsalted butters",
                "id": 291,
                "display_singular": "unsalted butter",
                "updated_at": 1509035272,
                "name": "unsalted butter",
                "created_at": 1494806355
              },
              "id": 58744,
              "position": 1,
              "measurements": [
                {
                  "quantity": "1",
                  "id": 506248,
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  }
                }
              ],
              "raw_text": "1 tablespoon unsalted butter"
            },
            {
              "extra_comment": "finely chopped, divided",
              "ingredient": {
                "updated_at": 1533328440,
                "name": "anchovies",
                "created_at": 1533328440,
                "display_plural": "anchovies",
                "id": 4540,
                "display_singular": "anchovy"
              },
              "id": 58745,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "10",
                  "id": 506263
                }
              ],
              "raw_text": "10 anchovy filets, finely chopped, divided"
            },
            {
              "raw_text": "½ cup panko bread crumbs",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035280,
                "name": "panko breadcrumbs",
                "created_at": 1494124470,
                "display_plural": "panko breadcrumbs",
                "id": 195,
                "display_singular": "panko breadcrumb"
              },
              "id": 58746,
              "position": 3,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "½",
                  "id": 506250
                },
                {
                  "unit": {
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g"
                  },
                  "quantity": "25",
                  "id": 506249
                }
              ]
            },
            {
              "raw_text": "½ cup grated Parmigiano-Reggiano cheese",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "freshly grated parmigiano-reggiano cheese",
                "updated_at": 1528724613,
                "name": "freshly grated parmigiano-reggiano cheese",
                "created_at": 1528724613,
                "display_plural": "freshly grated parmigiano-reggiano cheeses",
                "id": 4310
              },
              "id": 58747,
              "position": 4,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram"
                  },
                  "quantity": "55",
                  "id": 506258
                },
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "½",
                  "id": 506255
                }
              ]
            },
            {
              "extra_comment": "plus 1 tablespoon, divided",
              "ingredient": {
                "display_singular": "extra virgin olive oil",
                "updated_at": 1509035259,
                "name": "extra virgin olive oil",
                "created_at": 1495076759,
                "display_plural": "extra virgin olive oils",
                "id": 452
              },
              "id": 58748,
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "¼",
                  "id": 506253
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "milliliter",
                    "display_plural": "mL",
                    "display_singular": "mL",
                    "abbreviation": "mL"
                  },
                  "quantity": "60",
                  "id": 506251
                }
              ],
              "raw_text": "¼ cup plus 1 tablespoon extra-virgin olive oil, divided"
            },
            {
              "raw_text": "6 cloves garlic, minced",
              "extra_comment": "minced",
              "ingredient": {
                "display_plural": "garlics",
                "id": 95,
                "display_singular": "garlic",
                "updated_at": 1509035285,
                "name": "garlic",
                "created_at": 1493744766
              },
              "id": 58749,
              "position": 6,
              "measurements": [
                {
                  "unit": {
                    "name": "clove",
                    "display_plural": "cloves",
                    "display_singular": "clove",
                    "abbreviation": "clove",
                    "system": "none"
                  },
                  "quantity": "6",
                  "id": 506262
                }
              ]
            },
            {
              "position": 7,
              "measurements": [
                {
                  "quantity": "½",
                  "id": 506247,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  }
                }
              ],
              "raw_text": "½ teaspoon red pepper flakes",
              "extra_comment": "",
              "ingredient": {
                "id": 351,
                "display_singular": "red pepper flake",
                "updated_at": 1509035267,
                "name": "red pepper flakes",
                "created_at": 1494885083,
                "display_plural": "red pepper flakes"
              },
              "id": 58750
            },
            {
              "measurements": [
                {
                  "unit": {
                    "display_singular": "pt",
                    "abbreviation": "pt",
                    "system": "imperial",
                    "name": "pint",
                    "display_plural": "pt"
                  },
                  "quantity": "2",
                  "id": 506257
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "400",
                  "id": 506256
                }
              ],
              "raw_text": "2 pints cherry tomatoes, halved",
              "extra_comment": "halved",
              "ingredient": {
                "updated_at": 1509035255,
                "name": "cherry tomato",
                "created_at": 1495156049,
                "display_plural": "cherry tomatoes",
                "id": 498,
                "display_singular": "cherry tomato"
              },
              "id": 58751,
              "position": 8
            },
            {
              "raw_text": "1 teaspoon kosher salt, plus more to taste",
              "extra_comment": "plus more to taste",
              "ingredient": {
                "updated_at": 1509035289,
                "name": "kosher salt",
                "created_at": 1493307153,
                "display_plural": "kosher salts",
                "id": 11,
                "display_singular": "kosher salt"
              },
              "id": 58752,
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1",
                  "id": 506246
                }
              ]
            },
            {
              "extra_comment": "",
              "ingredient": {
                "id": 422,
                "display_singular": "white wine",
                "updated_at": 1509035262,
                "name": "white wine",
                "created_at": 1494989810,
                "display_plural": "white wines"
              },
              "id": 58753,
              "position": 10,
              "measurements": [
                {
                  "id": 506254,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "1"
                },
                {
                  "id": 506252,
                  "unit": {
                    "system": "metric",
                    "name": "milliliter",
                    "display_plural": "mL",
                    "display_singular": "mL",
                    "abbreviation": "mL"
                  },
                  "quantity": "240"
                }
              ],
              "raw_text": "1 cup white wine"
            },
            {
              "measurements": [
                {
                  "unit": {
                    "name": "pound",
                    "display_plural": "lb",
                    "display_singular": "lb",
                    "abbreviation": "lb",
                    "system": "imperial"
                  },
                  "quantity": "1",
                  "id": 506261
                },
                {
                  "unit": {
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram"
                  },
                  "quantity": "455",
                  "id": 506259
                }
              ],
              "raw_text": "1 pound spaghetti, cooked al dente, ¼ cup cooking water reserved",
              "extra_comment": "cooked al dente, 1/4 cup (60 ml) cooking water reserved",
              "ingredient": {
                "name": "spaghetti",
                "created_at": 1495414450,
                "display_plural": "spaghettis",
                "id": 589,
                "display_singular": "spaghetti",
                "updated_at": 1509035249
              },
              "id": 58754,
              "position": 11
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0",
                  "id": 506260
                }
              ],
              "raw_text": "Lemon zest, to taste",
              "extra_comment": "to taste",
              "ingredient": {
                "display_plural": "lemon  zests",
                "id": 1743,
                "display_singular": "lemon  zest",
                "updated_at": 1509035168,
                "name": "lemon  zest",
                "created_at": 1497026395
              },
              "id": 58755,
              "position": 12
            }
          ],
          "name": null,
          "position": 1
        }
      ],
      "num_servings": 4,
      "buzz_id": null,
      "promotion": "partial",
      "facebook_posts": [],
      "prep_time_minutes": 0,
      "tips_and_ratings_enabled": true,
      "created_at": 1564516706,
      "yields": "Servings: 4",
      "updated_at": 1683305956,
      "total_time_tier": null,
      "seo_title": "",
      "instructions": [
        {
          "start_time": 9000,
          "appliance": null,
          "end_time": 18833,
          "temperature": null,
          "id": 49183,
          "position": 1,
          "display_text": "Melt the butter in a large skillet over medium heat. Add 4 of the chopped anchovy filets and cook for 1 minute, until they begin to melt."
        },
        {
          "id": 49184,
          "position": 2,
          "display_text": "Add the panko bread crumbs and cook for 3 minutes, stirring frequently, until golden brown. Transfer the bread crumbs to a medium bowl and let cool to room temperature. Once cooled, toss with the Parmigiano-Reggiano cheese.",
          "start_time": 20000,
          "appliance": null,
          "end_time": 37833,
          "temperature": null
        },
        {
          "start_time": 40000,
          "appliance": null,
          "end_time": 48833,
          "temperature": null,
          "id": 49185,
          "position": 3,
          "display_text": "Heat ¼ cup (60 ml) of olive oil in a medium saucepan over medium-high heat. Once the oil begins to shimmer, add the remaining 6 anchovies and cook for 2 minutes, stirring frequently, until the anchovies begin to melt into the oil."
        },
        {
          "start_time": 51000,
          "appliance": null,
          "end_time": 66969,
          "temperature": null,
          "id": 49186,
          "position": 4,
          "display_text": "Add the garlic and red pepper flakes and cook for 30 seconds, until fragrant."
        },
        {
          "appliance": null,
          "end_time": 88666,
          "temperature": null,
          "id": 49187,
          "position": 5,
          "display_text": "Add the tomatoes and stir to coat in the oil. Season with 1 teaspoon of salt and cook for 5 minutes, or until the tomatoes just begin to soften.",
          "start_time": 69000
        },
        {
          "temperature": null,
          "id": 49188,
          "position": 6,
          "display_text": "Add the white wine and reduce the heat to low. Cook for 5 minutes, or until the sauce is reduced by half.",
          "start_time": 89000,
          "appliance": null,
          "end_time": 98333
        },
        {
          "start_time": 102500,
          "appliance": null,
          "end_time": 128466,
          "temperature": null,
          "id": 49189,
          "position": 7,
          "display_text": "Add cooked pasta and reserved cooking water to the pot with the tomatoes and stir to combine. Cook for 1 minute, until the pasta is well coated and saucy. Drizzle with the remaining tablespoon of olive oil and season with salt. Toss to coat."
        },
        {
          "appliance": null,
          "end_time": 147333,
          "temperature": null,
          "id": 49190,
          "position": 8,
          "display_text": "Serve the pasta topped with the anchovy bread crumbs and lemon zest",
          "start_time": 131166
        },
        {
          "start_time": 157166,
          "appliance": null,
          "end_time": 164466,
          "temperature": null,
          "id": 49191,
          "position": 9,
          "display_text": "Enjoy!"
        }
      ],
      "language": "eng",
      "nutrition": {
        "protein": 24,
        "fat": 22,
        "calories": 755,
        "sugar": 9,
        "carbohydrates": 109,
        "fiber": 19,
        "updated_at": "2022-10-01T08:04:39+02:00"
      },
      "name": "Tomato And Anchovy Pasta",
      "description": "Savor the bold flavors of this Tomato and Anchovy Pasta, a perfect weeknight meal that's both simple and satisfying. With a zesty tomato sauce and umami-packed anchovies, this dish will have your taste buds dancing in no time!",
      "video_id": 81004,
      "compilations": [
        {
          "name": "Tangy & Saucy Spaghetti Recipes",
          "buzz_id": null,
          "video_id": 99286,
          "keywords": null,
          "facebook_posts": [],
          "description": null,
          "draft_status": "published",
          "video_url": "https://vid.tasty.co/output/158499/hls24_1579849394.m3u8",
          "canonical_id": "compilation:1372",
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1579848969,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/252931.jpg",
          "promotion": "full",
          "country": "US",
          "language": "eng",
          "id": 1372,
          "beauty_url": null,
          "slug": "tangy-saucy-spaghetti-recipes",
          "thumbnail_alt_text": "",
          "approved_at": 1580777476
        },
        {
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/281005.jpg",
          "country": "US",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "draft_status": "published",
          "beauty_url": null,
          "buzz_id": null,
          "aspect_ratio": "1:1",
          "keywords": null,
          "name": "Tasty's Best Pasta Recipes",
          "canonical_id": "compilation:1684",
          "promotion": "full",
          "is_shoppable": false,
          "created_at": 1598896707,
          "approved_at": 1600108969,
          "video_url": "https://vid.tasty.co/output/177582/hls24_1598903165.m3u8",
          "id": 1684,
          "slug": "tasty-s-best-pasta-recipes",
          "video_id": 112179,
          "facebook_posts": [],
          "description": "Having trouble deciding what you should make next? Take a look at a few of the best pasta recipes we have to offer! From a <a href=\"https://tasty.co/recipe/vegan-mac-n-cheese\">vegan version of mac 'n' cheese</a> to delicious <a href=\"https://tasty.co/recipe/spaghetti-meatball-bake\">baked meatballs and spaghetti</a>, these ideas will satisfy every craving. Pair your pasta with a salad, dessert, and glass of wine — and you've got a restaurant-quality menu right at home!",
          "thumbnail_alt_text": ""
        },
        {
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "canonical_id": "compilation:2219",
          "slug": "make-the-perfect-bowl-of-pasta-with-these-recipes",
          "promotion": "full",
          "aspect_ratio": "1:1",
          "country": "US",
          "keywords": null,
          "facebook_posts": [],
          "video_url": "https://vid.tasty.co/output/198051/hls24_1617121116.m3u8",
          "approved_at": 1617195181,
          "id": 2219,
          "buzz_id": null,
          "video_id": 127253,
          "description": "We've curated a special assortment of pasta recipes just for you. From our unique <a href=\"https://tasty.co/recipe/tomato-and-anchovy-pasta\">tomato anchovy pasta</a> to mouth-watering <a href=\"https://tasty.co/recipe/one-pot-chicken-bacon-and-goat-cheese\">chicken, bacon and goat cheese pasta</a>, these recipes are made to impress! We're going to go eat our hearts out now: time to get cooking!",
          "draft_status": "published",
          "language": "eng",
          "beauty_url": null,
          "name": "Make The Perfect Bowl Of Pasta With These Recipes",
          "is_shoppable": false,
          "created_at": 1615809320,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/314886.jpg",
          "thumbnail_alt_text": ""
        }
      ],
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/216182.jpg",
      "approved_at": 1564773077,
      "tags": [
        {
          "display_name": "North American",
          "type": "cuisine",
          "root_tag_type": "cuisine",
          "name": "north_american",
          "id": 64444
        },
        {
          "root_tag_type": "meal",
          "name": "dinner",
          "id": 64486,
          "display_name": "Dinner",
          "type": "meal"
        },
        {
          "root_tag_type": "appliance",
          "name": "stove_top",
          "id": 65848,
          "display_name": "Stove Top",
          "type": "appliance"
        },
        {
          "root_tag_type": "cooking_style",
          "name": "big_batch",
          "id": 65851,
          "display_name": "Big Batch",
          "type": "cooking_style"
        },
        {
          "root_tag_type": "cooking_style",
          "name": "pan_fry",
          "id": 65859,
          "display_name": "Pan Fry",
          "type": "cooking_style"
        },
        {
          "name": "special_occasion",
          "id": 188967,
          "display_name": "Special Occasion",
          "type": "occasion",
          "root_tag_type": "seasonal"
        },
        {
          "root_tag_type": "equipment",
          "name": "cheese_grater",
          "id": 1247769,
          "display_name": "Cheese Grater",
          "type": "equipment"
        },
        {
          "id": 1247785,
          "display_name": "Pyrex",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "pyrex"
        },
        {
          "root_tag_type": "equipment",
          "name": "saute_pan",
          "id": 1247787,
          "display_name": "Saute Pan",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "tongs",
          "id": 1247790,
          "display_name": "Tongs",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "liquid_measuring_cup",
          "id": 1280506,
          "display_name": "Liquid Measuring Cup",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "dry_measuring_cups",
          "id": 1280507,
          "display_name": "Dry Measuring Cups",
          "type": "equipment"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "measuring_spoons",
          "id": 1280508,
          "display_name": "Measuring Spoons"
        },
        {
          "root_tag_type": "equipment",
          "name": "mixing_bowl",
          "id": 1280510,
          "display_name": "Mixing Bowl",
          "type": "equipment"
        },
        {
          "name": "contains_alcohol",
          "id": 5285641,
          "display_name": "Contains Alcohol",
          "type": "dietary",
          "root_tag_type": "dietary"
        },
        {
          "id": 8091917,
          "display_name": "High-Protein",
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "high_protein"
        },
        {
          "root_tag_type": "healthy",
          "name": "high_fiber",
          "id": 8091920,
          "display_name": "High-Fiber",
          "type": "healthy"
        }
      ],
      "thumbnail_alt_text": "",
      "video_url": "https://vid.tasty.co/output/132757/hls24_1557860941.m3u8",
      "nutrition_visibility": "auto",
      "keywords": "family dinner, jonah peretti, secret ingredient pasta, tasty, tasty_contains_alcohol, tomato and anchovy pasta recipe, umami pasta",
      "user_ratings": {
        "count_positive": 198,
        "score": 0.883929,
        "count_negative": 26
      },
      "slug": "tomato-and-anchovy-pasta",
      "servings_noun_singular": "serving",
      "renditions": [
        {
          "duration": 181348,
          "bit_rate": 2773,
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 720,
          "name": "mp4_720x720",
          "container": "mp4",
          "file_size": 62859318,
          "minimum_bit_rate": null,
          "maximum_bit_rate": null,
          "height": 720,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/132757/square_720/1557860941_00001.png",
          "url": "https://vid.tasty.co/output/132757/square_720/1557860941"
        },
        {
          "duration": 181348,
          "bit_rate": 979,
          "content_type": "video/mp4",
          "width": 320,
          "minimum_bit_rate": null,
          "name": "mp4_320x320",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/132757/square_320/1557860941_00001.png",
          "url": "https://vid.tasty.co/output/132757/square_320/1557860941",
          "height": 320,
          "aspect": "square",
          "maximum_bit_rate": null,
          "container": "mp4",
          "file_size": 22171380
        },
        {
          "aspect": "square",
          "width": 720,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/132757/landscape_720/1557860941_00001.png",
          "url": "https://vid.tasty.co/output/132757/landscape_720/1557860941",
          "duration": 181348,
          "bit_rate": 2774,
          "content_type": "video/mp4",
          "minimum_bit_rate": null,
          "name": "mp4_720x720",
          "maximum_bit_rate": null,
          "file_size": 62880105,
          "height": 720
        },
        {
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/132757/landscape_480/1557860941_00001.png",
          "url": "https://vid.tasty.co/output/132757/landscape_480/1557860941",
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 480,
          "minimum_bit_rate": null,
          "height": 480,
          "file_size": 37172083,
          "duration": 181348,
          "bit_rate": 1640,
          "name": "mp4_480x480",
          "maximum_bit_rate": null
        },
        {
          "url": "https://vid.tasty.co/output/132757/hls24_1557860941.m3u8",
          "bit_rate": null,
          "content_type": "application/vnd.apple.mpegurl",
          "name": "low",
          "height": 1080,
          "container": "ts",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/132757/1445289064805-h2exzu/1557860941_00001.png",
          "file_size": null,
          "minimum_bit_rate": 273,
          "maximum_bit_rate": 4619,
          "duration": 181348,
          "aspect": "square",
          "width": 1080
        }
      ]
    },
    {
      "servings_noun_singular": "cookie",
      "nutrition": {
        "sugar": 31,
        "carbohydrates": 47,
        "fiber": 2,
        "updated_at": "2021-05-03T13:22:11+02:00",
        "protein": 3,
        "fat": 29,
        "calories": 447
      },
      "aspect_ratio": "1:1",
      "created_at": 1576265764,
      "draft_status": "published",
      "inspired_by_url": null,
      "keywords": "",
      "slug": "browned-butter-chocolate-chip-cookies",
      "topics": [
        {
          "name": "Romantic Dinners",
          "slug": "romantic-dinners"
        },
        {
          "name": "Desserts",
          "slug": "desserts"
        }
      ],
      "cook_time_minutes": 25,
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/249914.jpg",
      "total_time_minutes": 65,
      "description": "Don’t worry if you’re skipping the eggs and butter–these vegan chocolate chip cookies are out of this world! Make them for friends and family, or just for yourself. You won’t be sorry you did!",
      "total_time_tier": {
        "tier": "under_1.5_hours",
        "display_tier": "Under 1.5 hours"
      },
      "show_id": 34,
      "show": {
        "name": "Goodful",
        "id": 34
      },
      "id": 5929,
      "prep_time_minutes": 10,
      "credits": [
        {
          "name": "Rachel Gaewski",
          "type": "internal"
        },
        {
          "name": "Karlee Rotoly",
          "type": "internal"
        }
      ],
      "instructions": [
        {
          "display_text": "Add the pecans to a large, high-walled skillet. Toast over medium heat for 5–8 minutes, until fragrant and beginning to darken slightly, stirring continuously to prevent burning.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52902,
          "position": 1
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52903,
          "position": 2,
          "display_text": "Pour in the melted coconut oil and stir to combine. Bring to a low simmer and steep the pecans for 8–10 minutes, until the coconut oil is tinted brown and there is a strong nutty aroma. Stir occasionally to prevent burning. Remove the pan from the heat and let cool for 5–10 minutes, until warm to the touch but cool enough to handle. Strain out the pecans and reserve for another use. You should have about ½ cup of infused coconut oil."
        },
        {
          "id": 52904,
          "position": 3,
          "display_text": "Add the warm coconut oil to a large microwave-safe bowl, along with the brown and granulated sugars, non-dairy milk, and vanilla. Whisk well to combine. Microwave for 20 seconds, just until the sugars have begun to dissolve.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "id": 52905,
          "position": 4,
          "display_text": "In a medium bowl, combine the flour, baking soda, and salt. Mix with a fork to combine.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52906,
          "position": 5,
          "display_text": "Sift the flour mixture into the wet ingredients and fold with a spatula to combine, being careful not to over-mix."
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52907,
          "position": 6,
          "display_text": "Fold in the chopped chocolate and chocolate chunks until evenly distributed.",
          "start_time": 0
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52908,
          "position": 7,
          "display_text": "Scoop the dough with a 2-ounce scoop onto 2 parchment-lined baking sheets, spacing at least 2 inches apart. Chill in the refrigerator for 30–60 minutes."
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52909,
          "position": 8,
          "display_text": "Preheat the oven to 375°F (190°C).",
          "start_time": 0
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52910,
          "position": 9,
          "display_text": "Bake the cookies for 15–18 minutes, until browned. Let cool for 10 minutes on the pans, then transfer to a wire rack to cool completely.",
          "start_time": 0
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52911,
          "position": 10,
          "display_text": "Enjoy!"
        }
      ],
      "price": {
        "consumption_total": 700,
        "consumption_portion": 100,
        "total": 1750,
        "updated_at": "2023-07-02T07:20:27+02:00",
        "portion": 200
      },
      "tips_and_ratings_enabled": true,
      "video_url": "https://vid.tasty.co/output/156307/hls24_1577151257.m3u8",
      "renditions": [
        {
          "container": "mp4",
          "url": "https://vid.tasty.co/output/156307/square_720/1577151257",
          "duration": 212092,
          "bit_rate": 2111,
          "width": 720,
          "height": 720,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/156307/square_720/1577151257_00001.png",
          "file_size": 55963490,
          "content_type": "video/mp4",
          "aspect": "square",
          "minimum_bit_rate": null,
          "name": "mp4_720x720",
          "maximum_bit_rate": null
        },
        {
          "file_size": 18813783,
          "duration": 212092,
          "bit_rate": 710,
          "content_type": "video/mp4",
          "aspect": "square",
          "minimum_bit_rate": null,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/156307/square_320/1577151257_00001.png",
          "name": "mp4_320x320",
          "maximum_bit_rate": null,
          "height": 320,
          "url": "https://vid.tasty.co/output/156307/square_320/1577151257",
          "width": 320
        },
        {
          "file_size": 55994281,
          "url": "https://vid.tasty.co/output/156307/landscape_720/1577151257",
          "aspect": "square",
          "width": 720,
          "name": "mp4_720x720",
          "height": 720,
          "container": "mp4",
          "duration": 212092,
          "bit_rate": 2113,
          "content_type": "video/mp4",
          "minimum_bit_rate": null,
          "maximum_bit_rate": null,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/156307/landscape_720/1577151257_00001.png"
        },
        {
          "container": "mp4",
          "file_size": 31816461,
          "bit_rate": 1201,
          "aspect": "square",
          "width": 480,
          "minimum_bit_rate": null,
          "name": "mp4_480x480",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/156307/landscape_480/1577151257_00001.png",
          "url": "https://vid.tasty.co/output/156307/landscape_480/1577151257",
          "duration": 212092,
          "content_type": "video/mp4",
          "maximum_bit_rate": null,
          "height": 480
        },
        {
          "name": "low",
          "maximum_bit_rate": 3723,
          "file_size": null,
          "url": "https://vid.tasty.co/output/156307/hls24_1577151257.m3u8",
          "duration": 212087,
          "minimum_bit_rate": 274,
          "aspect": "square",
          "width": 1080,
          "height": 1080,
          "container": "ts",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/156307/1445289064805-h2exzu/1577151257_00001.png",
          "bit_rate": null,
          "content_type": "application/vnd.apple.mpegurl"
        }
      ],
      "country": "US",
      "brand": null,
      "buzz_id": null,
      "approved_at": 1576267466,
      "video_ad_content": "none",
      "seo_title": "",
      "yields": "Makes 8-10 cookies",
      "promotion": "partial",
      "nutrition_visibility": "auto",
      "user_ratings": {
        "count_positive": 260,
        "score": 0.849673,
        "count_negative": 46
      },
      "servings_noun_plural": "cookies",
      "facebook_posts": [],
      "is_one_top": false,
      "compilations": [
        {
          "draft_status": "published",
          "video_id": 95031,
          "facebook_posts": [],
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "description": null,
          "language": "eng",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/156307/hls24_1577151257.m3u8",
          "aspect_ratio": "1:1",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/249914.jpg",
          "id": 1385,
          "is_shoppable": false,
          "keywords": null,
          "created_at": 1580403654,
          "approved_at": 1580403760,
          "name": "Vegan Browned \"Butter\" Chocolate Chip Cookies And Vanilla Cashew Milk",
          "canonical_id": "compilation:1385",
          "beauty_url": null,
          "buzz_id": null,
          "country": "US",
          "promotion": "full",
          "slug": "vegan-browned-butter-chocolate-chip-cookies-and-vanilla-cashew-milk"
        },
        {
          "aspect_ratio": "1:1",
          "keywords": null,
          "created_at": 1583826081,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/257932.jpg",
          "video_id": 101197,
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "id": 1430,
          "beauty_url": null,
          "buzz_id": null,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "language": "eng",
          "video_url": "https://vid.tasty.co/output/162137/hls24_1583826167.m3u8",
          "name": "6 Must-Try Vegan Desserts",
          "slug": "6-must-try-vegan-desserts",
          "promotion": "full",
          "country": "US",
          "is_shoppable": false,
          "facebook_posts": [],
          "description": null,
          "approved_at": 1587574037,
          "canonical_id": "compilation:1430"
        },
        {
          "slug": "vegan-holiday-desserts",
          "keywords": null,
          "facebook_posts": [],
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/300520.jpg",
          "id": 1991,
          "promotion": "full",
          "video_id": 120215,
          "show": [
            {
              "id": 34,
              "name": "Goodful"
            }
          ],
          "thumbnail_alt_text": "",
          "canonical_id": "compilation:1991",
          "beauty_url": null,
          "language": "eng",
          "approved_at": 1608562520,
          "name": "Vegan Holiday Desserts",
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "created_at": 1608502003,
          "description": null,
          "country": "US",
          "draft_status": "published",
          "video_url": "https://vid.tasty.co/output/189075/hls24_1608502241.m3u8",
          "buzz_id": null
        },
        {
          "aspect_ratio": "1:1",
          "created_at": 1608843423,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "name": "Goodful's Top Ten Vegan Recipes of 2020",
          "canonical_id": "compilation:2015",
          "id": 2015,
          "promotion": "full",
          "is_shoppable": false,
          "keywords": null,
          "description": null,
          "approved_at": 1609343019,
          "slug": "goodful-s-top-ten-vegan-recipes-of-2020",
          "video_id": 121909,
          "country": "US",
          "facebook_posts": [],
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/301575.jpg",
          "video_url": "https://vid.tasty.co/output/189684/hls24_1608844177.m3u8",
          "beauty_url": null,
          "buzz_id": null
        }
      ],
      "thumbnail_alt_text": "",
      "updated_at": 1582583601,
      "beauty_url": null,
      "is_shoppable": true,
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/a47a5576451941b591b50f38d051da8a/VeganBrownedButterCHocolateChipCookiesFBFinal.mp4",
      "language": "eng",
      "sections": [
        {
          "name": null,
          "position": 1,
          "components": [
            {
              "raw_text": "3 ounces finely chopped pecans (about 1 cup)",
              "extra_comment": "finely chopped",
              "ingredient": {
                "name": "chopped pecans",
                "created_at": 1495678111,
                "display_plural": "chopped pecans",
                "id": 734,
                "display_singular": "chopped pecan",
                "updated_at": 1509035237
              },
              "id": 64081,
              "position": 1,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "ounce",
                    "display_plural": "oz",
                    "display_singular": "oz",
                    "abbreviation": "oz"
                  },
                  "quantity": "3",
                  "id": 544118
                }
              ]
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "¾",
                  "id": 544121
                }
              ],
              "raw_text": "¾ cup refined coconut oil, melted",
              "extra_comment": "melted",
              "ingredient": {
                "id": 3579,
                "display_singular": "refined coconut oil",
                "updated_at": 1517250145,
                "name": "refined coconut oil",
                "created_at": 1517250145,
                "display_plural": "refined coconut oils"
              },
              "id": 64082,
              "position": 2
            },
            {
              "position": 3,
              "measurements": [
                {
                  "id": 544123,
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "¾"
                }
              ],
              "raw_text": "¾ cup dark brown sugar",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "dark brown sugar",
                "updated_at": 1509035230,
                "name": "dark brown sugar",
                "created_at": 1495763910,
                "display_plural": "dark brown sugars",
                "id": 824
              },
              "id": 64083
            },
            {
              "position": 4,
              "measurements": [
                {
                  "id": 544126,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "½"
                }
              ],
              "raw_text": "½ cup granulated sugar",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1494989637,
                "display_plural": "granulated sugars",
                "id": 419,
                "display_singular": "granulated sugar",
                "updated_at": 1509035262,
                "name": "granulated sugar"
              },
              "id": 64084
            },
            {
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup"
                  },
                  "quantity": "¼",
                  "id": 544119
                }
              ],
              "raw_text": "¼ cup unsweetened non-dairy milk of choice",
              "extra_comment": "of choice",
              "ingredient": {
                "updated_at": 1509035094,
                "name": "unsweetened non-dairy milk",
                "created_at": 1506477002,
                "display_plural": "unsweetened non-dairy milks",
                "id": 3017,
                "display_singular": "unsweetened non-dairy milk"
              },
              "id": 64085
            },
            {
              "id": 64086,
              "position": 6,
              "measurements": [
                {
                  "quantity": "1",
                  "id": 544124,
                  "unit": {
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons"
                  }
                }
              ],
              "raw_text": "1 teaspoon vanilla extract",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035284,
                "name": "vanilla extract",
                "created_at": 1493745620,
                "display_plural": "vanilla extracts",
                "id": 103,
                "display_singular": "vanilla extract"
              }
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "1 ½",
                  "id": 544120
                }
              ],
              "raw_text": "1½ cups all-purpose flour",
              "extra_comment": "",
              "ingredient": {
                "name": "all-purpose flour",
                "created_at": 1494122348,
                "display_plural": "all-purpose flours",
                "id": 185,
                "display_singular": "all-purpose flour",
                "updated_at": 1509035280
              },
              "id": 64087,
              "position": 7
            },
            {
              "id": 64088,
              "position": 8,
              "measurements": [
                {
                  "id": 544122,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "½"
                }
              ],
              "raw_text": "½ teaspoon baking soda",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1494297371,
                "display_plural": "baking sodas",
                "id": 247,
                "display_singular": "baking soda",
                "updated_at": 1509035276,
                "name": "baking soda"
              }
            },
            {
              "extra_comment": "",
              "ingredient": {
                "name": "kosher salt",
                "created_at": 1493307153,
                "display_plural": "kosher salts",
                "id": 11,
                "display_singular": "kosher salt",
                "updated_at": 1509035289
              },
              "id": 64089,
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon"
                  },
                  "quantity": "1 ½",
                  "id": 544128
                }
              ],
              "raw_text": "1½ teaspoons kosher salt"
            },
            {
              "ingredient": {
                "updated_at": 1509035282,
                "name": "dark chocolate",
                "created_at": 1493954478,
                "display_plural": "dark chocolates",
                "id": 171,
                "display_singular": "dark chocolate"
              },
              "id": 64090,
              "position": 10,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "oz",
                    "system": "imperial",
                    "name": "ounce",
                    "display_plural": "oz",
                    "display_singular": "oz"
                  },
                  "quantity": "3.5",
                  "id": 544125
                }
              ],
              "raw_text": "1 3.5-ounce dark chocolate bar, chopped",
              "extra_comment": "chopped"
            },
            {
              "raw_text": "½ cup semisweet chocolate chunks",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1576267409,
                "display_plural": "semisweet chocolate chunks",
                "id": 6039,
                "display_singular": "semisweet chocolate chunk",
                "updated_at": 1576267409,
                "name": "semisweet chocolate chunks"
              },
              "id": 64091,
              "position": 11,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "½",
                  "id": 544127
                }
              ]
            }
          ]
        }
      ],
      "tags": [
        {
          "root_tag_type": "meal",
          "name": "desserts",
          "id": 64485,
          "display_name": "Desserts",
          "type": "meal"
        },
        {
          "root_tag_type": "appliance",
          "name": "stove_top",
          "id": 65848,
          "display_name": "Stove Top",
          "type": "appliance"
        },
        {
          "id": 1247772,
          "display_name": "Ice Cream Scoop",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "ice_cream_scoop"
        },
        {
          "name": "oven_mitts",
          "id": 1247775,
          "display_name": "Oven Mitts",
          "type": "equipment",
          "root_tag_type": "equipment"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "parchment_paper",
          "id": 1247780,
          "display_name": "Parchment Paper"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "whisk",
          "id": 1247793,
          "display_name": "Whisk"
        },
        {
          "root_tag_type": "equipment",
          "name": "liquid_measuring_cup",
          "id": 1280506,
          "display_name": "Liquid Measuring Cup",
          "type": "equipment"
        },
        {
          "name": "dry_measuring_cups",
          "id": 1280507,
          "display_name": "Dry Measuring Cups",
          "type": "equipment",
          "root_tag_type": "equipment"
        },
        {
          "name": "measuring_spoons",
          "id": 1280508,
          "display_name": "Measuring Spoons",
          "type": "equipment",
          "root_tag_type": "equipment"
        }
      ],
      "name": "Browned “Butter” Chocolate Chip Cookies",
      "num_servings": 8,
      "canonical_id": "recipe:5929",
      "video_id": 95031,
      "seo_path": null,
      "brand_id": null
    },
    {
      "buzz_id": null,
      "country": "US",
      "brand": null,
      "nutrition": {
        "carbohydrates": 32,
        "fiber": 0,
        "updated_at": "2019-11-27T07:10:25+01:00",
        "protein": 4,
        "fat": 13,
        "calories": 264,
        "sugar": 13
      },
      "name": "Blueberry Cream Muffins",
      "video_ad_content": null,
      "yields": "Servings: 24",
      "promotion": "partial",
      "video_id": null,
      "seo_path": null,
      "id": 5814,
      "draft_status": "published",
      "inspired_by_url": null,
      "description": "",
      "credits": [
        {
          "name": "Kaleb Mayer",
          "type": "community"
        }
      ],
      "servings_noun_plural": "servings",
      "beauty_url": null,
      "facebook_posts": [],
      "price": {
        "updated_at": "2023-07-02T07:20:09+02:00",
        "portion": 50,
        "consumption_total": 600,
        "consumption_portion": 0,
        "total": 1050
      },
      "tips_and_ratings_enabled": true,
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "canonical_id": "recipe:5814",
      "created_at": 1574456610,
      "thumbnail_alt_text": "",
      "nutrition_visibility": "auto",
      "sections": [
        {
          "components": [
            {
              "raw_text": "4 eggs",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035288,
                "name": "egg",
                "created_at": 1493314622,
                "display_plural": "eggs",
                "id": 19,
                "display_singular": "egg"
              },
              "id": 63062,
              "position": 1,
              "measurements": [
                {
                  "quantity": "4",
                  "id": 652620,
                  "unit": {
                    "abbreviation": "",
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": ""
                  }
                }
              ]
            },
            {
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "2",
                  "id": 652619
                },
                {
                  "id": 652618,
                  "unit": {
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram"
                  },
                  "quantity": "400"
                }
              ],
              "raw_text": "2 cups granulated sugar",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "granulated sugar",
                "updated_at": 1509035262,
                "name": "granulated sugar",
                "created_at": 1494989637,
                "display_plural": "granulated sugars",
                "id": 419
              },
              "id": 63063,
              "position": 2
            },
            {
              "position": 3,
              "measurements": [
                {
                  "quantity": "240",
                  "id": 652624,
                  "unit": {
                    "name": "milliliter",
                    "display_plural": "mL",
                    "display_singular": "mL",
                    "abbreviation": "mL",
                    "system": "metric"
                  }
                },
                {
                  "unit": {
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups"
                  },
                  "quantity": "1",
                  "id": 652622
                }
              ],
              "raw_text": "1 cup vegetable oil",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035288,
                "name": "vegetable oil",
                "created_at": 1493314628,
                "display_plural": "vegetable oils",
                "id": 20,
                "display_singular": "vegetable oil"
              },
              "id": 63064
            },
            {
              "measurements": [
                {
                  "unit": {
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon"
                  },
                  "quantity": "1",
                  "id": 652621
                }
              ],
              "raw_text": "1 teaspoon vanilla extract",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1493745620,
                "display_plural": "vanilla extracts",
                "id": 103,
                "display_singular": "vanilla extract",
                "updated_at": 1509035284,
                "name": "vanilla extract"
              },
              "id": 63065,
              "position": 4
            },
            {
              "raw_text": "4 cups flour",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035288,
                "name": "flour",
                "created_at": 1493314654,
                "display_plural": "flours",
                "id": 25,
                "display_singular": "flour"
              },
              "id": 63066,
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "500",
                  "id": 652629
                },
                {
                  "id": 652628,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "4"
                }
              ]
            },
            {
              "measurements": [
                {
                  "id": 652623,
                  "unit": {
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon"
                  },
                  "quantity": "1"
                }
              ],
              "raw_text": "1 teaspoon baking soda",
              "extra_comment": "",
              "ingredient": {
                "name": "baking soda",
                "created_at": 1494297371,
                "display_plural": "baking sodas",
                "id": 247,
                "display_singular": "baking soda",
                "updated_at": 1509035276
              },
              "id": 63067,
              "position": 6
            },
            {
              "id": 63068,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "2",
                  "id": 652625
                }
              ],
              "raw_text": "2 teaspoons baking powder",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "baking powder",
                "updated_at": 1509035288,
                "name": "baking powder",
                "created_at": 1493314647,
                "display_plural": "baking powders",
                "id": 23
              }
            },
            {
              "extra_comment": "",
              "ingredient": {
                "display_plural": "sour creams",
                "id": 496,
                "display_singular": "sour cream",
                "updated_at": 1509035256,
                "name": "sour cream",
                "created_at": 1495154479
              },
              "id": 63069,
              "position": 8,
              "measurements": [
                {
                  "unit": {
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g"
                  },
                  "quantity": "490",
                  "id": 652631
                },
                {
                  "unit": {
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup"
                  },
                  "quantity": "2",
                  "id": 652630
                }
              ],
              "raw_text": "2 cups (16oz) sour cream"
            },
            {
              "raw_text": "2 cups blueberries",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035263,
                "name": "blueberry",
                "created_at": 1494983257,
                "display_plural": "blueberries",
                "id": 400,
                "display_singular": "blueberry"
              },
              "id": 63070,
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "200",
                  "id": 652627
                },
                {
                  "unit": {
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups"
                  },
                  "quantity": "2",
                  "id": 652626
                }
              ]
            }
          ],
          "name": null,
          "position": 1
        }
      ],
      "tags": [
        {
          "root_tag_type": "dietary",
          "name": "vegetarian",
          "id": 64469,
          "display_name": "Vegetarian",
          "type": "dietary"
        },
        {
          "root_tag_type": "difficulty",
          "name": "easy",
          "id": 64471,
          "display_name": "Easy",
          "type": "difficulty"
        },
        {
          "root_tag_type": "meal",
          "name": "breakfast",
          "id": 64483,
          "display_name": "Breakfast",
          "type": "meal"
        },
        {
          "name": "baking",
          "id": 64492,
          "display_name": "Baking",
          "type": "appliance",
          "root_tag_type": "appliance"
        },
        {
          "root_tag_type": "appliance",
          "name": "bakery_goods",
          "id": 65857,
          "display_name": "Bakery Goods",
          "type": "appliance"
        }
      ],
      "num_servings": 24,
      "aspect_ratio": "16:9",
      "updated_at": 1628187876,
      "renditions": [],
      "seo_title": "Blueberry Cream Muffins Recipe | Tasty",
      "thumbnail_url": "https://img.buzzfeed.com/tasty-app-user-assets-prod-us-east-1/recipes/4e9524578f544c888af761e10630593b.jpeg",
      "topics": [
        {
          "name": "Baked Goods",
          "slug": "baked-goods"
        },
        {
          "name": "Best Vegetarian",
          "slug": "best-vegetarian"
        },
        {
          "name": "Community Recipes",
          "slug": "community"
        },
        {
          "slug": "breakfast",
          "name": "Breakfast"
        }
      ],
      "cook_time_minutes": null,
      "language": "eng",
      "user_ratings": {
        "count_positive": 110,
        "score": 0.964912,
        "count_negative": 4
      },
      "show_id": 17,
      "brand_id": null,
      "total_time_tier": null,
      "slug": "blueberry-cream-muffins",
      "total_time_minutes": null,
      "approved_at": 1574872807,
      "is_one_top": false,
      "compilations": [],
      "video_url": null,
      "is_shoppable": true,
      "original_video_url": null,
      "instructions": [
        {
          "end_time": 0,
          "temperature": null,
          "id": 52137,
          "position": 1,
          "display_text": "In a mixing bowl, beat eggs. Gradually add sugar. While beating slowly pour in oil. Add vanilla.",
          "start_time": 0,
          "appliance": null
        },
        {
          "position": 2,
          "display_text": "Combine the dry ingredients.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52138
        },
        {
          "display_text": "Add dry ingredients alternately with sour cream to the egg mixture.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52139,
          "position": 3
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52140,
          "position": 4,
          "display_text": "Gently add blueberries.",
          "start_time": 0
        },
        {
          "id": 52141,
          "position": 5,
          "display_text": "Spoon into the greased muffin tin or paper liners",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "appliance": "oven",
          "end_time": 0,
          "temperature": 400,
          "id": 52142,
          "position": 6,
          "display_text": "Bake at 400°F (200°C) for 20 minutes.",
          "start_time": 0
        },
        {
          "temperature": null,
          "id": 52697,
          "position": 7,
          "display_text": "Enjoy!",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        }
      ],
      "keywords": "",
      "servings_noun_singular": "serving",
      "prep_time_minutes": null
    },
    {
      "country": "US",
      "sections": [
        {
          "name": null,
          "position": 1,
          "components": [
            {
              "raw_text": "3 cups whole milk ricotta",
              "extra_comment": "",
              "ingredient": {
                "display_plural": "whole milk ricotta cheeses",
                "id": 696,
                "display_singular": "whole milk ricotta cheese",
                "updated_at": 1509035240,
                "name": "whole milk ricotta cheese",
                "created_at": 1495664520
              },
              "id": 52651,
              "position": 1,
              "measurements": [
                {
                  "quantity": "3",
                  "id": 731568,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  }
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "750",
                  "id": 731567
                }
              ]
            },
            {
              "ingredient": {
                "id": 3568,
                "display_singular": "shredded low-moisture mozzarella",
                "updated_at": 1516936780,
                "name": "shredded low-moisture mozzarella",
                "created_at": 1516936780,
                "display_plural": "shredded low-moisture mozzarellas"
              },
              "id": 52652,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "3 ½",
                  "id": 731565
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "350",
                  "id": 731564
                }
              ],
              "raw_text": "3½ cups shredded low-moisture mozzarella cheese, divided",
              "extra_comment": "divided"
            },
            {
              "ingredient": {
                "updated_at": 1509035159,
                "name": "grated parmesan cheese",
                "created_at": 1497741203,
                "display_plural": "grated parmesan cheeses",
                "id": 1869,
                "display_singular": "grated parmesan cheese"
              },
              "id": 52653,
              "position": 3,
              "measurements": [
                {
                  "quantity": "1 ½",
                  "id": 731583,
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  }
                },
                {
                  "unit": {
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric"
                  },
                  "quantity": "165",
                  "id": 731582
                }
              ],
              "raw_text": "1½ cups grated Parmesan cheese, divided",
              "extra_comment": "divided"
            },
            {
              "ingredient": {
                "display_plural": "large eggs",
                "id": 253,
                "display_singular": "large egg",
                "updated_at": 1509035275,
                "name": "large egg",
                "created_at": 1494382414
              },
              "id": 52654,
              "position": 4,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "2",
                  "id": 731566
                }
              ],
              "raw_text": "2 large eggs",
              "extra_comment": ""
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "1",
                  "id": 731579
                },
                {
                  "unit": {
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g"
                  },
                  "quantity": "35",
                  "id": 731578
                }
              ],
              "raw_text": "1 cup finely chopped fresh parsley, loosely packed",
              "extra_comment": "finely chopped, loosely packed",
              "ingredient": {
                "updated_at": 1509035283,
                "name": "fresh parsley",
                "created_at": 1493906396,
                "display_plural": "fresh parsleys",
                "id": 154,
                "display_singular": "fresh parsley"
              },
              "id": 52655,
              "position": 5
            },
            {
              "id": 52656,
              "position": 6,
              "measurements": [
                {
                  "quantity": "2 ½",
                  "id": 731576,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  }
                }
              ],
              "raw_text": "2½ teaspoons kosher salt, divided",
              "extra_comment": "divided",
              "ingredient": {
                "updated_at": 1509035289,
                "name": "kosher salt",
                "created_at": 1493307153,
                "display_plural": "kosher salts",
                "id": 11,
                "display_singular": "kosher salt"
              }
            },
            {
              "id": 52657,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "2",
                  "id": 731584
                }
              ],
              "raw_text": "2 tablespoons olive oil",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1493306183,
                "display_plural": "olive oils",
                "id": 4,
                "display_singular": "olive oil",
                "updated_at": 1509035290,
                "name": "olive oil"
              }
            },
            {
              "ingredient": {
                "display_singular": "medium yellow onion",
                "updated_at": 1509035220,
                "name": "medium yellow onion",
                "created_at": 1496102165,
                "display_plural": "medium yellow onions",
                "id": 942
              },
              "id": 52658,
              "position": 8,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "1",
                  "id": 731570
                }
              ],
              "raw_text": "1 medium yellow onion, diced",
              "extra_comment": "diced"
            },
            {
              "raw_text": "1 pound ground beef",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "ground beef",
                "updated_at": 1509035282,
                "name": "ground beef",
                "created_at": 1493920746,
                "display_plural": "ground beefs",
                "id": 161
              },
              "id": 52659,
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "lb",
                    "display_singular": "lb",
                    "abbreviation": "lb",
                    "system": "imperial",
                    "name": "pound"
                  },
                  "quantity": "1",
                  "id": 731581
                },
                {
                  "id": 731580,
                  "unit": {
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric"
                  },
                  "quantity": "455"
                }
              ]
            },
            {
              "extra_comment": "minced",
              "ingredient": {
                "created_at": 1493744766,
                "display_plural": "garlics",
                "id": 95,
                "display_singular": "garlic",
                "updated_at": 1509035285,
                "name": "garlic"
              },
              "id": 52660,
              "position": 10,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "clove",
                    "display_plural": "cloves",
                    "display_singular": "clove",
                    "abbreviation": "clove"
                  },
                  "quantity": "4",
                  "id": 731569
                }
              ],
              "raw_text": "4 cloves garlic, minced"
            },
            {
              "measurements": [
                {
                  "unit": {
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp",
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons"
                  },
                  "quantity": "2",
                  "id": 731574
                }
              ],
              "raw_text": "2 tablespoons McCormick® Savory Spice Blend",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1553568771,
                "name": "McCormick® Savory Spice Blend",
                "created_at": 1553568771,
                "display_plural": "McCormick® Savory Spice Blends",
                "id": 5237,
                "display_singular": "McCormick® Savory Spice Blend"
              },
              "id": 52661,
              "position": 11
            },
            {
              "extra_comment": "divided",
              "ingredient": {
                "display_plural": "marinara sauces",
                "id": 201,
                "display_singular": "marinara sauce",
                "updated_at": 1509035279,
                "name": "marinara sauce",
                "created_at": 1494208809
              },
              "id": 52662,
              "position": 12,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "6",
                  "id": 731577
                },
                {
                  "unit": {
                    "display_plural": "kg",
                    "display_singular": "kg",
                    "abbreviation": "kg",
                    "system": "metric",
                    "name": "kilogram"
                  },
                  "quantity": "1.5",
                  "id": 731575
                }
              ],
              "raw_text": "6 cups marinara sauce, divided"
            },
            {
              "raw_text": "Nonstick cooking spray, for greasing",
              "extra_comment": "for greasing",
              "ingredient": {
                "updated_at": 1520176895,
                "name": "nonstick cooking spray",
                "created_at": 1520176895,
                "display_plural": "nonstick cooking sprays",
                "id": 3826,
                "display_singular": "nonstick cooking spray"
              },
              "id": 52663,
              "position": 13,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "1",
                  "id": 731573
                }
              ]
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "pound",
                    "display_plural": "lb",
                    "display_singular": "lb",
                    "abbreviation": "lb"
                  },
                  "quantity": "½",
                  "id": 731572
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "225",
                  "id": 731571
                }
              ],
              "raw_text": "½ pound lasagna noodles, cooked according to package instructions",
              "extra_comment": "cooked according to package instructions",
              "ingredient": {
                "display_plural": "lasagna noodles",
                "id": 1273,
                "display_singular": "lasagna noodle",
                "updated_at": 1509035198,
                "name": "lasagna noodle",
                "created_at": 1496668286
              },
              "id": 52664,
              "position": 14
            }
          ]
        }
      ],
      "tags": [
        {
          "root_tag_type": "business_tags",
          "name": "mccormick_seasoned_pro",
          "id": 3956651,
          "display_name": "McCormick Seasoned Pro",
          "type": "business_tags"
        },
        {
          "display_name": "Schwartz Seasoned Pro",
          "type": "business_tags",
          "root_tag_type": "business_tags",
          "name": "schwartz_seasoned_pro",
          "id": 3956652
        },
        {
          "display_name": "Club House Seasoned Pro",
          "type": "business_tags",
          "root_tag_type": "business_tags",
          "name": "club_house_seasoned_pro",
          "id": 3956653
        },
        {
          "name": "high_protein",
          "id": 8091917,
          "display_name": "High-Protein",
          "type": "healthy",
          "root_tag_type": "healthy"
        },
        {
          "root_tag_type": "healthy",
          "name": "low_sugar",
          "id": 8091918,
          "display_name": "Low-Sugar",
          "type": "healthy"
        }
      ],
      "nutrition": {},
      "compilations": [],
      "thumbnail_url": "https://img.buzzfeed.com/tasty-app-user-assets-prod-us-east-1/recipes/8a0ce26532fa4a47bd082e815ca49ad6.jpeg",
      "total_time_minutes": 0,
      "facebook_posts": [],
      "language": "eng",
      "user_ratings": {
        "count_positive": 93,
        "score": 0.911765,
        "count_negative": 9
      },
      "aspect_ratio": null,
      "inspired_by_url": null,
      "beauty_url": null,
      "promotion": "partial",
      "seo_path": null,
      "price": {
        "portion": 200,
        "consumption_total": 1650,
        "consumption_portion": 150,
        "total": 2300,
        "updated_at": "2023-07-02T07:16:50+02:00"
      },
      "buzz_id": null,
      "thumbnail_alt_text": "",
      "renditions": [],
      "total_time_tier": null,
      "video_ad_content": null,
      "seo_title": "",
      "video_id": null,
      "instructions": [
        {
          "end_time": 0,
          "temperature": 375,
          "id": 45050,
          "position": 1,
          "display_text": "Preheat the oven to 375˚F (190˚C).",
          "start_time": 0,
          "appliance": "oven"
        },
        {
          "end_time": 0,
          "temperature": null,
          "id": 45051,
          "position": 2,
          "display_text": "In a large bowl, mix together the ricotta, 2 cups (200 G) of mozzarella, 1 cup (110 G) of Parmesan, eggs, parsley and 1 teaspoon salt. Set aside.",
          "start_time": 0,
          "appliance": null
        },
        {
          "id": 45052,
          "position": 3,
          "display_text": "In a large pan, heat the olive oil over medium heat. Add the onion and sauté for 2-3 minutes, until translucent. Add the ground beef, breaking up with a wooden spoon. Stir in the garlic, Savory spice blend, and remaining 1½ teaspoons salt. Cook for 8 minutes, until the meat is no longer pink. Add 5 cups (1.3 Kilograms) of marinara sauce and stir to combine.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "temperature": null,
          "id": 45053,
          "position": 4,
          "display_text": "To assemble the lasagna, grease a 9 x 13-inch (22 x 33 cm)  baking dish with nonstick spray. Spread the remaining cup of marinara sauce over the bottom of the dish. Lay 4 sheets of lasagna on top of the sauce. Spread 1½ cups (375 G) of the ricotta mixture on top of the noodles. Pour 1½ cups (395 G) of meat sauce on top of the cheese. Repeat with the remaining ingredients, finishing with a layer of meat sauce. Loosely cover the baking dish with foil.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 45054,
          "position": 5,
          "display_text": "Bake for 40 minutes.",
          "start_time": 0
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 45055,
          "position": 6,
          "display_text": "Increase the oven temperature to 500ºF (260˚C). Uncover the lasagna and sprinkle the remaining 1½ cups (150 G) mozzarella and ½ cup (55 G) Parmesan over the top.",
          "start_time": 0
        },
        {
          "id": 45056,
          "position": 7,
          "display_text": "Bake the lasagna for 5 minutes more, until the cheese is bubbly and browned.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 45057,
          "position": 8,
          "display_text": "Enjoy!",
          "start_time": 0
        }
      ],
      "prep_time_minutes": 0,
      "num_servings": 12,
      "tips_and_ratings_enabled": true,
      "draft_status": "published",
      "updated_at": 1683305925,
      "credits": [
        {
          "name": null,
          "type": "internal"
        }
      ],
      "original_video_url": null,
      "cook_time_minutes": 0,
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "created_at": 1553790152,
      "nutrition_visibility": "auto",
      "id": 4885,
      "brand": null,
      "name": "Savory Lasagna",
      "video_url": null,
      "canonical_id": "recipe:4885",
      "keywords": "",
      "slug": "savoury-lasagna",
      "show_id": 17,
      "brand_id": null,
      "servings_noun_plural": "servings",
      "servings_noun_singular": "serving",
      "description": "Dive into layers of savory goodness with this classic comfort food! Tender pasta sheets are layered with a hearty meat sauce, rich cheese, and aromatic herbs and spices, all baked to perfection until bubbly and golden. It's a dish that's perfect for sharing with family and friends, and guaranteed to satisfy your cravings!",
      "approved_at": 1563370544,
      "is_one_top": false,
      "is_shoppable": true,
      "topics": [
        {
          "name": "Tasty Spice Recipes",
          "slug": "mccormick-seasoned-pro"
        },
        {
          "slug": "pasta",
          "name": "Pasta"
        }
      ],
      "yields": "12 Servings"
    },
    {
      "language": "und",
      "seo_path": null,
      "id": 2436,
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/97761.jpg",
      "video_url": "https://vid.tasty.co/output/51134/low_1504636473.m3u8",
      "buzz_id": 4624246,
      "aspect_ratio": "1:1",
      "draft_status": "published",
      "credits": [
        {
          "name": "Alix Traeger",
          "type": "internal"
        }
      ],
      "renditions": [
        {
          "aspect": "square",
          "width": 720,
          "name": "mp4_720x720",
          "maximum_bit_rate": null,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/51134/mp4_1280X720/1504636473_00001.png",
          "file_size": 41944915,
          "url": "https://vid.tasty.co/output/51134/mp4_1280X720/1504636473",
          "height": 720,
          "duration": 49434,
          "bit_rate": 6789,
          "content_type": "video/mp4",
          "minimum_bit_rate": null
        },
        {
          "bit_rate": null,
          "aspect": "square",
          "width": 1080,
          "minimum_bit_rate": 273,
          "name": "low",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/51134/1445289064805-h2exzu/1504636473_00001.png",
          "file_size": null,
          "duration": 49408,
          "maximum_bit_rate": 7692,
          "height": 1080,
          "container": "mp4",
          "url": "https://vid.tasty.co/output/51134/low_1504636473.m3u8",
          "content_type": "application/vnd.apple.mpegurl"
        },
        {
          "bit_rate": 6690,
          "aspect": "square",
          "width": 640,
          "minimum_bit_rate": null,
          "name": "mp4_640x640",
          "height": 640,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/51134/mp4_640x640/1504636473_00001.png",
          "duration": 49434,
          "url": "https://vid.tasty.co/output/51134/mp4_640x640/1504636473",
          "content_type": "video/mp4",
          "maximum_bit_rate": null,
          "container": "mp4",
          "file_size": 41336152
        },
        {
          "height": 720,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/51134/mp4_720x1280/1504636473_00001.png",
          "file_size": 41817860,
          "width": 720,
          "name": "mp4_720x720",
          "maximum_bit_rate": null,
          "url": "https://vid.tasty.co/output/51134/mp4_720x1280/1504636473",
          "duration": 49434,
          "bit_rate": 6768,
          "content_type": "video/mp4",
          "aspect": "square",
          "minimum_bit_rate": null
        }
      ],
      "yields": "Servings: 1",
      "canonical_id": "recipe:2436",
      "cook_time_minutes": null,
      "sections": [
        {
          "components": [
            {
              "measurements": [
                {
                  "quantity": "100",
                  "id": 591088,
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  }
                },
                {
                  "unit": {
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups"
                  },
                  "quantity": "1",
                  "id": 591087
                }
              ],
              "raw_text": "1 cup shredded mozzarella cheese",
              "extra_comment": "",
              "ingredient": {
                "display_plural": "shredded mozzarella cheeses",
                "id": 169,
                "display_singular": "shredded mozzarella cheese",
                "updated_at": 1509035282,
                "name": "shredded mozzarella cheese",
                "created_at": 1493925751
              },
              "id": 23884,
              "position": 1
            },
            {
              "id": 23885,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "1",
                  "id": 591089
                }
              ],
              "raw_text": "1 egg yolk",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035286,
                "name": "egg yolk",
                "created_at": 1493743327,
                "display_plural": "egg yolks",
                "id": 67,
                "display_singular": "egg yolk"
              }
            }
          ],
          "name": null,
          "position": 1
        }
      ],
      "servings_noun_plural": "servings",
      "beauty_url": null,
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/c3bb47cc8b8947e1b558ff2d2213e23b/fb_2.mp4",
      "user_ratings": {
        "count_positive": 424,
        "score": 0.597183,
        "count_negative": 286
      },
      "price": {
        "total": 550,
        "updated_at": "2023-07-02T07:09:13+02:00",
        "portion": 550,
        "consumption_total": 300,
        "consumption_portion": 300
      },
      "slug": "2-ingredient-pasta",
      "servings_noun_singular": "serving",
      "show_id": 17,
      "nutrition": {
        "calories": 520,
        "sugar": 3,
        "carbohydrates": 11,
        "fiber": 0,
        "updated_at": "2021-05-03T13:21:22+02:00",
        "protein": 41,
        "fat": 34
      },
      "show": {
        "id": 17,
        "name": "Tasty"
      },
      "created_at": 1504294336,
      "is_one_top": false,
      "is_shoppable": true,
      "total_time_tier": null,
      "keywords": "2-ingredient, buzzfeed, cheese, dinner, healthy, low-carb, pasta, tasty, tasty_vegetarian, vegetarian",
      "video_id": 29446,
      "facebook_posts": [],
      "thumbnail_alt_text": "",
      "seo_title": null,
      "nutrition_visibility": "auto",
      "brand": null,
      "brand_id": null,
      "tags": [
        {
          "name": "italian",
          "id": 64453,
          "display_name": "Italian",
          "type": "european",
          "root_tag_type": "cuisine"
        },
        {
          "root_tag_type": "cooking_style",
          "name": "comfort_food",
          "id": 64462,
          "display_name": "Comfort Food",
          "type": "cooking_style"
        },
        {
          "type": "dietary",
          "root_tag_type": "dietary",
          "name": "gluten_free",
          "id": 64465,
          "display_name": "Gluten-Free"
        },
        {
          "root_tag_type": "healthy",
          "name": "healthy",
          "id": 64466,
          "display_name": "Healthy",
          "type": "healthy"
        },
        {
          "id": 64467,
          "display_name": "Low-Carb",
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "low_carb"
        },
        {
          "display_name": "Vegetarian",
          "type": "dietary",
          "root_tag_type": "dietary",
          "name": "vegetarian",
          "id": 64469
        },
        {
          "display_name": "5 Ingredients or Less",
          "type": "difficulty",
          "root_tag_type": "difficulty",
          "name": "5_ingredients_or_less",
          "id": 64470
        },
        {
          "id": 64471,
          "display_name": "Easy",
          "type": "difficulty",
          "root_tag_type": "difficulty",
          "name": "easy"
        },
        {
          "root_tag_type": "meal",
          "name": "dinner",
          "id": 64486,
          "display_name": "Dinner",
          "type": "meal"
        },
        {
          "name": "kid_friendly",
          "id": 64488,
          "display_name": "Kid-Friendly",
          "type": "cooking_style",
          "root_tag_type": "cooking_style"
        },
        {
          "name": "weeknight",
          "id": 64505,
          "display_name": "Weeknight",
          "type": "dinner",
          "root_tag_type": "meal"
        },
        {
          "root_tag_type": "appliance",
          "name": "microwave",
          "id": 65845,
          "display_name": "Microwave",
          "type": "appliance"
        },
        {
          "type": "appliance",
          "root_tag_type": "appliance",
          "name": "stove_top",
          "id": 65848,
          "display_name": "Stove Top"
        },
        {
          "root_tag_type": "equipment",
          "name": "parchment_paper",
          "id": 1247780,
          "display_name": "Parchment Paper",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "pyrex",
          "id": 1247785,
          "display_name": "Pyrex",
          "type": "equipment"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "spatula",
          "id": 1247788,
          "display_name": "Spatula"
        },
        {
          "display_name": "Baking Pan",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "baking_pan",
          "id": 1280500
        },
        {
          "root_tag_type": "equipment",
          "name": "dry_measuring_cups",
          "id": 1280507,
          "display_name": "Dry Measuring Cups",
          "type": "equipment"
        },
        {
          "id": 1280510,
          "display_name": "Mixing Bowl",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "mixing_bowl"
        },
        {
          "id": 5143247,
          "display_name": "McCormick Easy Dinner",
          "type": "business_tags",
          "root_tag_type": "business_tags",
          "name": "mccormick_easy_dinner"
        },
        {
          "root_tag_type": "dietary",
          "name": "keto",
          "id": 8091756,
          "display_name": "Keto",
          "type": "dietary"
        },
        {
          "id": 8091917,
          "display_name": "High-Protein",
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "high_protein"
        },
        {
          "root_tag_type": "healthy",
          "name": "low_sugar",
          "id": 8091918,
          "display_name": "Low-Sugar",
          "type": "healthy"
        }
      ],
      "name": "2-ingredient Pasta",
      "num_servings": 1,
      "description": "This 2-ingredient pasta is a quick and easy dinner option, with pasta and your favorite jarred sauce.",
      "updated_at": 1683304895,
      "approved_at": 1599763073,
      "topics": [
        {
          "name": "5 Ingredients or Less",
          "slug": "5-ingredients-or-less"
        },
        {
          "name": "Best Vegetarian",
          "slug": "best-vegetarian"
        },
        {
          "slug": "easy-dinner",
          "name": "Easy Dinner"
        },
        {
          "name": "Healthy Eating",
          "slug": "healthy"
        },
        {
          "slug": "keto",
          "name": "Keto"
        },
        {
          "name": "Kid Friendly",
          "slug": "kid-friendly"
        },
        {
          "name": "Low Carb Meals",
          "slug": "low-carb-meals"
        },
        {
          "name": "Dinner",
          "slug": "dinner"
        },
        {
          "name": "Pasta",
          "slug": "pasta"
        },
        {
          "name": "Italian",
          "slug": "italian"
        }
      ],
      "country": "ZZ",
      "instructions": [
        {
          "temperature": null,
          "id": 20352,
          "position": 1,
          "display_text": "Add the mozzarella to a bowl and microwave for 1-2 minutes, until melted.",
          "start_time": 0,
          "appliance": null,
          "end_time": 2140
        },
        {
          "temperature": null,
          "id": 20353,
          "position": 2,
          "display_text": "Allow the mozzarella to cool for 30 seconds.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "temperature": null,
          "id": 20354,
          "position": 3,
          "display_text": "With a spatula, gently fold the egg yolk into the cheese.",
          "start_time": 2690,
          "appliance": null,
          "end_time": 7210
        },
        {
          "start_time": 7910,
          "appliance": null,
          "end_time": 9200,
          "temperature": null,
          "id": 20355,
          "position": 4,
          "display_text": "Turn the mixture out onto a parchment paper-lined baking sheet."
        },
        {
          "start_time": 9410,
          "appliance": null,
          "end_time": 12299,
          "temperature": null,
          "id": 20356,
          "position": 5,
          "display_text": "Place another piece of parchment paper on top of the dough and press down with your hand until thin."
        },
        {
          "end_time": 19930,
          "temperature": null,
          "id": 20357,
          "position": 6,
          "display_text": "Remove the top piece of parchment and cut the dough into thin strips.",
          "start_time": 12520,
          "appliance": null
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 20358,
          "position": 7,
          "display_text": "Place the “pasta” on a rack and refrigerate for four hours or overnight.",
          "start_time": 0
        },
        {
          "end_time": 23950,
          "temperature": 215,
          "id": 20359,
          "position": 8,
          "display_text": "Place the “pasta” in boiling water for one minute.",
          "start_time": 21920,
          "appliance": "food_thermometer"
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 20360,
          "position": 9,
          "display_text": "Drain into a colander and run cool water over the pasta to prevent sticking."
        },
        {
          "temperature": null,
          "id": 20361,
          "position": 10,
          "display_text": "Serve with your favorite sauce and toppings.",
          "start_time": 24770,
          "appliance": null,
          "end_time": 30729
        },
        {
          "id": 20362,
          "position": 11,
          "display_text": "Enjoy!",
          "start_time": 31400,
          "appliance": null,
          "end_time": 34240,
          "temperature": null
        }
      ],
      "prep_time_minutes": null,
      "compilations": [
        {
          "keywords": null,
          "facebook_posts": [],
          "created_at": 1515525485,
          "language": "eng",
          "thumbnail_url": "https://s3.amazonaws.com/video-api-prod/assets/f37be98862124adcbd951f57d8b777de/KetoFB.jpg",
          "video_url": "https://vid.tasty.co/output/71862/hls24_1515525175.m3u8",
          "approved_at": 1515785659,
          "aspect_ratio": null,
          "promotion": "full",
          "video_id": 43190,
          "id": 406,
          "description": "The Keto diet is a popular low-carb, high-fat plan that can allow your body to burn fat for energy. Navigating a new diet and all its rules is always tricky, but we’re here to help! From a super filling and satisfying <a href=\"https://tasty.co/recipe/paleo-beef-and-veggie-stir-fry\">beef and veggie stir-fry</a> to quick and easy <a href=\"https://tasty.co/recipe/baked-avocado-eggs\">baked avocado eggs</a>, these Ketogenic diet recipes will show you how to satisfy your cravings in a completely Keto-friendly way.",
          "canonical_id": "compilation:406",
          "buzz_id": null,
          "slug": "6-keto-friendly-meals",
          "show": [
            {
              "id": 34,
              "name": "Goodful"
            }
          ],
          "thumbnail_alt_text": "",
          "beauty_url": null,
          "country": "US",
          "draft_status": "published",
          "name": "6 Keto-Friendly Meals",
          "is_shoppable": false
        },
        {
          "created_at": 1518631105,
          "draft_status": "published",
          "video_url": "https://vid.tasty.co/output/78854/hls24_1518627461.m3u8",
          "name": "5 Easy 2-Ingredient Recipes",
          "id": 465,
          "country": "US",
          "facebook_posts": [],
          "thumbnail_alt_text": "",
          "slug": "5-easy-2-ingredient-recipes",
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "description": null,
          "language": "eng",
          "beauty_url": null,
          "aspect_ratio": "1:1",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/137136.jpg",
          "approved_at": 1518679068,
          "canonical_id": "compilation:465",
          "buzz_id": 4750736,
          "promotion": "full",
          "video_id": 47717,
          "is_shoppable": false
        },
        {
          "approved_at": 1563332585,
          "beauty_url": null,
          "slug": "keto-friendly-weekday-dinner-recipes",
          "country": "US",
          "is_shoppable": true,
          "keywords": null,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/225378.jpg",
          "video_id": 87494,
          "created_at": 1563182777,
          "video_url": "https://vid.tasty.co/output/138972/hls24_1563182870.m3u8",
          "buzz_id": null,
          "promotion": "full",
          "description": null,
          "draft_status": "published",
          "canonical_id": "compilation:1023",
          "id": 1023,
          "aspect_ratio": "16:9",
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "thumbnail_alt_text": "",
          "name": "Keto-Friendly Weekday Dinner Recipes"
        },
        {
          "video_url": "https://vid.tasty.co/output/163863/hls24_1585661134.m3u8",
          "approved_at": 1591131115,
          "facebook_posts": [],
          "thumbnail_alt_text": "",
          "canonical_id": "compilation:1456",
          "beauty_url": null,
          "promotion": "full",
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/260482.jpg",
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1585660817,
          "description": null,
          "buzz_id": null,
          "slug": "easy-no-bake-snacks",
          "video_id": 102865,
          "country": "US",
          "language": "eng",
          "name": "Easy No-Bake Snacks",
          "id": 1456
        },
        {
          "facebook_posts": [],
          "show": [
            {
              "id": 17,
              "name": "Tasty"
            }
          ],
          "draft_status": "published",
          "name": "Food To Eat When You're Feeling Lazy",
          "slug": "food-to-eat-when-you-re-feeling-lazy",
          "aspect_ratio": "1:1",
          "country": "US",
          "language": "eng",
          "thumbnail_alt_text": "",
          "buzz_id": null,
          "canonical_id": "compilation:1732",
          "id": 1732,
          "is_shoppable": false,
          "keywords": null,
          "created_at": 1601459761,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/285275.jpg",
          "video_url": "https://vid.tasty.co/output/180320/hls24_1601466337.m3u8",
          "description": "Feeling lazy? Need recipes you can quickly make? These are the perfect dishes for you! Open up our treasure-trove of recipes and never be sleep hungry again. From versatile freezer foods to two-ingredient recipes, these ideas will delight everyone's taste buds and keep you craving even more.",
          "approved_at": 1601559170,
          "beauty_url": null,
          "promotion": "full",
          "video_id": 114203
        },
        {
          "draft_status": "published",
          "name": "Indulgent Vs Light Dinner Recipes",
          "id": 2193,
          "beauty_url": null,
          "slug": "indulgent-vs-light-dinner-recipes",
          "country": "US",
          "is_shoppable": false,
          "keywords": null,
          "description": "Have some chicken in the fridge and looking for something light to whip up for dinner? The <a href=\"https://tasty.co/recipe/one-pan-lemon-pepper-chicken\">One-Pan Lemon Pepper Chicken</a> is perfect for you. Or if you're feeling like making something more filling, go for the homemade <a href=\"https://tasty.co/recipe/homemade-chicken-tikka-masala\">Chicken Tikka Masala</a>. Use the spaghetti in your pantry for a light <a href=\"https://tasty.co/recipe/2-ingredient-pasta\">2-Ingredient Pasta</a> or indulge in a <a href=\"https://tasty.co/recipe/cheesy-chicken-alfredo-pasta-bake\">Cheesy Chicken Alfredo Pasta Bake</a>.",
          "canonical_id": "compilation:2193",
          "buzz_id": null,
          "video_id": 125210,
          "aspect_ratio": "1:1",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "video_url": "https://vid.tasty.co/output/219932/hls24_1634930480.m3u8",
          "approved_at": 1615814518,
          "promotion": "full",
          "facebook_posts": [],
          "created_at": 1614363222,
          "language": "eng",
          "thumbnail_url": "https://s3.amazonaws.com/video-api-prod/assets/8ebbc1961b844cbeac4ecfb841967997/imagebuilder_1614362767606.jpg",
          "thumbnail_alt_text": ""
        },
        {
          "country": "US",
          "created_at": 1617096493,
          "thumbnail_alt_text": "",
          "approved_at": 1617975763,
          "buzz_id": null,
          "slug": "easy-recipes-under-5",
          "language": "eng",
          "video_url": "https://vid.tasty.co/output/198025/hls24_1617097467.m3u8",
          "name": "Easy Recipes Under $5",
          "canonical_id": "compilation:2257",
          "beauty_url": null,
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "draft_status": "published",
          "id": 2257,
          "promotion": "full",
          "aspect_ratio": "1:1",
          "keywords": null,
          "facebook_posts": [],
          "description": "Adulting is hard, and budgeting is one of the hardest: doesn't the world know you have to eat? Well, we do, so we're bringing you these easy recipes under $5 and, well, they're unbelievably delicious. From a sweet <a href=\"https://tasty.co/recipe/2-ingredient-chocolate-souffle\">chocolate souffle</a> to the super easy-to-make, nutrient-packed <a href=\"https://tasty.co/recipe/honey-roasted-carrots\">honey-roasted carrots</a>, there's something for every palate. So go ahead, take your pick and relish in your food without breaking the bank!",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/314834.jpg",
          "video_id": 127759
        },
        {
          "facebook_posts": [],
          "language": "eng",
          "promotion": "full",
          "video_id": 130346,
          "country": "US",
          "beauty_url": null,
          "video_url": "https://vid.tasty.co/output/201478/hls24_1619654417.m3u8",
          "description": "Are you famished but too tired to cook? Well, look no further: these super easy recipes will keep all of your hunger pangs at bay. From a delicious <a href=\"https://tasty.co/recipe/2-ingredient-chocolate-cake\">two-ingredient chocolate cake</a> to a <a href=\"https://tasty.co/recipe/3-ingredient-teriyaki-chicken\">three-ingredient teriyaki chicken</a> you can whip up these mouthwatering (and fool-proof!) recipes in no time. ",
          "name": "No-Fuss Recipes For Those Lazy Days",
          "canonical_id": "compilation:2348",
          "id": 2348,
          "slug": "no-fuss-recipes-for-those-lazy-days",
          "keywords": null,
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1619646737,
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/319703.jpg",
          "thumbnail_alt_text": "",
          "approved_at": 1620048895,
          "aspect_ratio": "1:1",
          "buzz_id": null
        },
        {
          "thumbnail_alt_text": "",
          "name": "Cheap Vs Expensive 3-Course Meal",
          "canonical_id": "compilation:2791",
          "buzz_id": null,
          "promotion": "full",
          "aspect_ratio": "1:1",
          "keywords": null,
          "show": [
            {
              "id": 17,
              "name": "Tasty"
            }
          ],
          "beauty_url": null,
          "description": null,
          "draft_status": "published",
          "id": 2791,
          "slug": "cheap-vs-expensive-3-course-meal",
          "video_id": 140314,
          "is_shoppable": false,
          "facebook_posts": [],
          "approved_at": 1631553693,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/339958.jpg",
          "video_url": "https://vid.tasty.co/output/214528/hls24_1630397304.m3u8",
          "country": "US",
          "created_at": 1630397151,
          "language": "eng"
        },
        {
          "created_at": 1632473076,
          "video_url": "https://vid.tasty.co/output/217111/hls24_1632473478.m3u8",
          "name": "2 Ingredient Easy Meals",
          "canonical_id": "compilation:2846",
          "country": "US",
          "is_shoppable": false,
          "facebook_posts": [],
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/344076.jpg",
          "id": 2846,
          "beauty_url": null,
          "slug": "2-ingredient-easy-meals",
          "promotion": "full",
          "video_id": 142189,
          "keywords": null,
          "description": "Whether you are cooking on a budget, haven't had time to grocery shop, or you're just looking for something quick and easy, these two-ingredient recipes never fail. A <a href=\"https://tasty.co/recipe/2-ingredient-pasta\">low-carb pasta</a> makes for a great dinner, and no one will believe how easy it is to whip up our <a href=\"https://tasty.co/recipe/2-ingredient-pumpkin-bread\">two-ingredient pumpkin bread</a>. You might want to throw out those fancy French cookbooks after trying this <a href=\"https://tasty.co/recipe/2-ingredient-chocolate-souffle\">simple chocolate souffle</a>. Yes, you're reading this correctly. Two ingredients is all you need!",
          "draft_status": "published",
          "approved_at": 1633453120,
          "buzz_id": null,
          "aspect_ratio": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "thumbnail_alt_text": ""
        }
      ],
      "tips_and_ratings_enabled": true,
      "inspired_by_url": "http://www.uplateanyway.com/keto/fettuccine-low-carb-pasta/",
      "total_time_minutes": null,
      "video_ad_content": "none",
      "promotion": "partial"
    },
    {
      "nutrition_visibility": "auto",
      "keywords": "",
      "facebook_posts": [],
      "seo_path": null,
      "brand": null,
      "servings_noun_plural": "servings",
      "video_id": null,
      "description": "These macarons are a sweet and delicate treat that are perfect for anyone with a nut allergy. Made with a crispy shell and a creamy filling, they're a perfect afternoon snack or dessert.",
      "country": "US",
      "instructions": [
        {
          "end_time": 0,
          "temperature": null,
          "id": 52683,
          "position": 1,
          "display_text": "In a bowl, beat egg whites until frothy.",
          "start_time": 0,
          "appliance": null
        },
        {
          "end_time": 0,
          "temperature": null,
          "id": 52684,
          "position": 2,
          "display_text": "Gradually add the granulated sugar until stiff peaks form.",
          "start_time": 0,
          "appliance": null
        },
        {
          "temperature": null,
          "id": 52685,
          "position": 3,
          "display_text": "In a separate bowl, whisk the flour and powdered sugar together. Then, sift the flour and powdered sugar mixture into the egg white mixture.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "display_text": "Add the vanilla extract, and gel food coloring if you want the macarons to be colored.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52686,
          "position": 4
        },
        {
          "position": 5,
          "display_text": "Gently fold all the ingredients together.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52687
        },
        {
          "id": 52688,
          "position": 6,
          "display_text": "Transfer the batter into a piping bag with a rounded tip.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "id": 52689,
          "position": 7,
          "display_text": "Pipe the macarons onto a baking sheet with parchment paper. Gently tap the baking sheet on a flat surface a few times to release air bubbles.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "position": 8,
          "display_text": "Let the macarons sit at room temperature for about 45 minutes.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52690
        },
        {
          "temperature": 280,
          "id": 52691,
          "position": 9,
          "display_text": "Preheat the oven to 280°F.",
          "start_time": 0,
          "appliance": "oven",
          "end_time": 0
        },
        {
          "position": 10,
          "display_text": "Bake the macarons for 17-20 minutes.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52692
        },
        {
          "display_text": "Allow the macarons to cool for 10 minutes, then transfer the macarons on to a cooling rack.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52693,
          "position": 11
        },
        {
          "position": 12,
          "display_text": "Add a dollop of buttercream or any frosting of your choice to one of the macaron shells, then top it with another macaron shell to create a sandwich. Repeat with the remaining shells and frosting.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52694
        },
        {
          "temperature": null,
          "id": 52695,
          "position": 13,
          "display_text": "For best results, allow the macarons to “bloom” for about 24 hours.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 52696,
          "position": 14,
          "display_text": "Enjoy!",
          "start_time": 0
        }
      ],
      "language": "eng",
      "price": {
        "total": 650,
        "updated_at": "2023-07-02T07:20:17+02:00",
        "portion": 50,
        "consumption_total": 250,
        "consumption_portion": 0
      },
      "name": "Nut-Free Macarons",
      "compilations": [],
      "aspect_ratio": "16:9",
      "thumbnail_alt_text": "",
      "approved_at": 1574967882,
      "beauty_url": null,
      "total_time_tier": null,
      "canonical_id": "recipe:5910",
      "yields": "Servings: 10",
      "slug": "nut-free-macarons",
      "sections": [
        {
          "components": [
            {
              "ingredient": {
                "id": 1945,
                "display_singular": "large egg white",
                "updated_at": 1509035155,
                "name": "large egg white",
                "created_at": 1498565541,
                "display_plural": "large egg whites"
              },
              "id": 63833,
              "position": 1,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "2",
                  "id": 548682
                }
              ],
              "raw_text": "2 large egg whites",
              "extra_comment": ""
            },
            {
              "id": 63834,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "4",
                  "id": 548690
                }
              ],
              "raw_text": "4 tablespoons plus 1/2 teaspoon granulated sugar",
              "extra_comment": "plus 1/2 teaspoon",
              "ingredient": {
                "display_plural": "granulated sugars",
                "id": 419,
                "display_singular": "granulated sugar",
                "updated_at": 1509035262,
                "name": "granulated sugar",
                "created_at": 1494989637
              }
            },
            {
              "id": 63835,
              "position": 3,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g"
                  },
                  "quantity": "65",
                  "id": 548685
                },
                {
                  "id": 548683,
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "½"
                }
              ],
              "raw_text": "1/2 cup all purpose flour",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1513187920,
                "display_plural": "all purpose flours",
                "id": 3393,
                "display_singular": "all purpose flour",
                "updated_at": 1513187920,
                "name": "all purpose flour"
              }
            },
            {
              "raw_text": "1/2 cup powdered sugar",
              "extra_comment": "",
              "ingredient": {
                "name": "powdered sugar",
                "created_at": 1493747135,
                "display_plural": "powdered sugars",
                "id": 144,
                "display_singular": "powdered sugar",
                "updated_at": 1509035283
              },
              "id": 63836,
              "position": 4,
              "measurements": [
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "55",
                  "id": 548687
                },
                {
                  "quantity": "½",
                  "id": 548686,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  }
                }
              ]
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "½",
                  "id": 548684
                }
              ],
              "raw_text": "1/2 teaspoon vanilla extract",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035284,
                "name": "vanilla extract",
                "created_at": 1493745620,
                "display_plural": "vanilla extracts",
                "id": 103,
                "display_singular": "vanilla extract"
              },
              "id": 63838,
              "position": 5
            },
            {
              "position": 6,
              "measurements": [
                {
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0",
                  "id": 548688
                }
              ],
              "raw_text": "Gel food coloring (optional)",
              "extra_comment": "optional",
              "ingredient": {
                "created_at": 1500724268,
                "display_plural": "gel food colorings",
                "id": 2483,
                "display_singular": "gel food coloring",
                "updated_at": 1509035126,
                "name": "gel food coloring"
              },
              "id": 63839
            },
            {
              "id": 63840,
              "position": 7,
              "measurements": [
                {
                  "id": 548689,
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  },
                  "quantity": "0"
                }
              ],
              "raw_text": "Buttercream or any frosting of your choice",
              "extra_comment": "or any frosting of your choice",
              "ingredient": {
                "updated_at": 1509035186,
                "name": "buttercream frosting",
                "created_at": 1496767341,
                "display_plural": "buttercream frostings",
                "id": 1475,
                "display_singular": "buttercream frosting"
              }
            }
          ],
          "name": null,
          "position": 1
        }
      ],
      "buzz_id": null,
      "tips_and_ratings_enabled": true,
      "created_at": 1574816565,
      "inspired_by_url": null,
      "video_ad_content": null,
      "promotion": "partial",
      "is_shoppable": true,
      "user_ratings": {
        "count_positive": 72,
        "score": 0.888889,
        "count_negative": 9
      },
      "id": 5910,
      "tags": [
        {
          "name": "dairy_free",
          "id": 64463,
          "display_name": "Dairy-Free",
          "type": "dietary",
          "root_tag_type": "dietary"
        },
        {
          "root_tag_type": "dietary",
          "name": "vegetarian",
          "id": 64469,
          "display_name": "Vegetarian",
          "type": "dietary"
        },
        {
          "root_tag_type": "healthy",
          "name": "low_calorie",
          "id": 8091916,
          "display_name": "Low-Calorie",
          "type": "healthy"
        },
        {
          "root_tag_type": "healthy",
          "name": "low_fat",
          "id": 8091919,
          "display_name": "Low-Fat",
          "type": "healthy"
        }
      ],
      "nutrition": {
        "carbohydrates": 16,
        "fiber": 0,
        "updated_at": "2020-01-16T07:01:11+01:00",
        "protein": 2,
        "fat": 1,
        "calories": 85,
        "sugar": 10
      },
      "num_servings": 10,
      "updated_at": 1683305369,
      "is_one_top": false,
      "topics": [
        {
          "name": "Best Vegetarian",
          "slug": "best-vegetarian"
        },
        {
          "name": "Community Recipes",
          "slug": "community"
        }
      ],
      "servings_noun_singular": "serving",
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "draft_status": "published",
      "thumbnail_url": "https://img.buzzfeed.com/tasty-app-user-assets-prod-us-east-1/recipes/8230d427f6b648e9ae0cfbcbea9d6877.jpeg",
      "prep_time_minutes": null,
      "brand_id": null,
      "video_url": null,
      "original_video_url": null,
      "cook_time_minutes": null,
      "show_id": 17,
      "total_time_minutes": null,
      "renditions": [],
      "credits": [
        {
          "name": "Grace Walker",
          "type": "community"
        }
      ],
      "seo_title": ""
    },
    {
      "topics": [
        {
          "slug": "romantic-dinners",
          "name": "Romantic Dinners"
        },
        {
          "name": "Dinner",
          "slug": "dinner"
        },
        {
          "name": "Pasta",
          "slug": "pasta"
        },
        {
          "name": "American",
          "slug": "american"
        },
        {
          "name": "Italian",
          "slug": "italian"
        }
      ],
      "thumbnail_alt_text": "",
      "video_url": "https://vid.tasty.co/output/89658/hls24_1523902408.m3u8",
      "num_servings": 20,
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "total_time_minutes": null,
      "yields": "Servings: 20",
      "user_ratings": {
        "score": 0.737179,
        "count_negative": 82,
        "count_positive": 230
      },
      "servings_noun_singular": "serving",
      "name": "100-Layer Lasagna",
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/d6ca0a1f356141049705f49d48aecc5d/BFV35527_100LayerLasagna-FBFINAL.mp4",
      "cook_time_minutes": null,
      "seo_path": null,
      "brand_id": null,
      "sections": [
        {
          "components": [
            {
              "extra_comment": "",
              "ingredient": {
                "display_plural": "butters",
                "id": 30,
                "display_singular": "butter",
                "updated_at": 1509035287,
                "name": "butter",
                "created_at": 1493314940
              },
              "id": 37335,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "name": "stick",
                    "display_plural": "sticks",
                    "display_singular": "stick",
                    "abbreviation": "stick",
                    "system": "none"
                  },
                  "quantity": "1",
                  "id": 440589
                }
              ],
              "raw_text": "1 stick butter"
            },
            {
              "ingredient": {
                "created_at": 1493314654,
                "display_plural": "flours",
                "id": 25,
                "display_singular": "flour",
                "updated_at": 1509035288,
                "name": "flour"
              },
              "id": 37336,
              "position": 3,
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "½",
                  "id": 440603
                },
                {
                  "unit": {
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric"
                  },
                  "quantity": "60",
                  "id": 440601
                }
              ],
              "raw_text": "½ cup flour",
              "extra_comment": ""
            },
            {
              "extra_comment": "",
              "ingredient": {
                "created_at": 1493314636,
                "display_plural": "milks",
                "id": 21,
                "display_singular": "milk",
                "updated_at": 1509035288,
                "name": "milk"
              },
              "id": 37337,
              "position": 4,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "8",
                  "id": 440593
                },
                {
                  "id": 440590,
                  "unit": {
                    "system": "metric",
                    "name": "liter",
                    "display_plural": "L",
                    "display_singular": "L",
                    "abbreviation": "L"
                  },
                  "quantity": "2"
                }
              ],
              "raw_text": "8 cups milk"
            },
            {
              "raw_text": "2 teaspoons salt",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035288,
                "name": "salt",
                "created_at": 1493314644,
                "display_plural": "salts",
                "id": 22,
                "display_singular": "salt"
              },
              "id": 37338,
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "2",
                  "id": 440599
                }
              ]
            },
            {
              "id": 37339,
              "position": 6,
              "measurements": [
                {
                  "quantity": "1",
                  "id": 440594,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  }
                }
              ],
              "raw_text": "1 teaspoon black pepper",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035289,
                "name": "black pepper",
                "created_at": 1493307183,
                "display_plural": "black peppers",
                "id": 12,
                "display_singular": "black pepper"
              }
            },
            {
              "raw_text": "½ teaspoon nutmeg",
              "extra_comment": "",
              "ingredient": {
                "name": "nutmeg",
                "created_at": 1495588355,
                "display_plural": "nutmegs",
                "id": 677,
                "display_singular": "nutmeg",
                "updated_at": 1509035242
              },
              "id": 37340,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "½",
                  "id": 440600
                }
              ]
            }
          ],
          "name": "Béchamel Sauce",
          "position": 1
        },
        {
          "components": [
            {
              "position": 9,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup"
                  },
                  "quantity": "½",
                  "id": 440596
                },
                {
                  "unit": {
                    "abbreviation": "mL",
                    "system": "metric",
                    "name": "milliliter",
                    "display_plural": "mL",
                    "display_singular": "mL"
                  },
                  "quantity": "120",
                  "id": 440595
                }
              ],
              "raw_text": "½ cup olive oil",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035290,
                "name": "olive oil",
                "created_at": 1493306183,
                "display_plural": "olive oils",
                "id": 4,
                "display_singular": "olive oil"
              },
              "id": 37342
            },
            {
              "measurements": [
                {
                  "id": 440592,
                  "unit": {
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups"
                  },
                  "quantity": "2"
                },
                {
                  "unit": {
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram"
                  },
                  "quantity": "300",
                  "id": 440591
                }
              ],
              "raw_text": "2 cups onion, finely chopped",
              "extra_comment": "finely chopped",
              "ingredient": {
                "id": 17,
                "display_singular": "onion",
                "updated_at": 1509035288,
                "name": "onion",
                "created_at": 1493311386,
                "display_plural": "onions"
              },
              "id": 37343,
              "position": 10
            },
            {
              "raw_text": "2 cups carrots, finely chopped",
              "extra_comment": "finely chopped",
              "ingredient": {
                "updated_at": 1509035288,
                "name": "carrot",
                "created_at": 1493314877,
                "display_plural": "carrots",
                "id": 27,
                "display_singular": "carrot"
              },
              "id": 37344,
              "position": 11,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup"
                  },
                  "quantity": "2",
                  "id": 440606
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "240",
                  "id": 440605
                }
              ]
            },
            {
              "raw_text": "2 cups celery, finely chopped",
              "extra_comment": "finely chopped",
              "ingredient": {
                "created_at": 1495082620,
                "display_plural": "celeries",
                "id": 458,
                "display_singular": "celery",
                "updated_at": 1509035259,
                "name": "celery"
              },
              "id": 37345,
              "position": 12,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "2",
                  "id": 440604
                },
                {
                  "unit": {
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g"
                  },
                  "quantity": "450",
                  "id": 440602
                }
              ]
            },
            {
              "raw_text": "6 pounds ground beef, 80% lean 20% fat",
              "extra_comment": "80% lean 20% fat",
              "ingredient": {
                "display_singular": "ground beef",
                "updated_at": 1509035282,
                "name": "ground beef",
                "created_at": 1493920746,
                "display_plural": "ground beefs",
                "id": 161
              },
              "id": 37346,
              "position": 13,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "lb",
                    "display_singular": "lb",
                    "abbreviation": "lb",
                    "system": "imperial",
                    "name": "pound"
                  },
                  "quantity": "6",
                  "id": 440598
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "kilogram",
                    "display_plural": "kg",
                    "display_singular": "kg",
                    "abbreviation": "kg"
                  },
                  "quantity": "2.5",
                  "id": 440597
                }
              ]
            },
            {
              "ingredient": {
                "display_singular": "tomato sauce",
                "updated_at": 1509035268,
                "name": "tomato sauce",
                "created_at": 1494882012,
                "display_plural": "tomato sauces",
                "id": 344
              },
              "id": 37347,
              "position": 14,
              "measurements": [
                {
                  "quantity": "115",
                  "id": 440614,
                  "unit": {
                    "name": "ounce",
                    "display_plural": "oz",
                    "display_singular": "oz",
                    "abbreviation": "oz",
                    "system": "imperial"
                  }
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "kilogram",
                    "display_plural": "kg",
                    "display_singular": "kg",
                    "abbreviation": "kg"
                  },
                  "quantity": "3.5",
                  "id": 440612
                }
              ],
              "raw_text": "4 28-ounce cans tomato sauce",
              "extra_comment": "4 cans"
            },
            {
              "id": 37348,
              "position": 15,
              "measurements": [
                {
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "½",
                  "id": 440608
                },
                {
                  "unit": {
                    "abbreviation": "g",
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g"
                  },
                  "quantity": "110",
                  "id": 440607
                }
              ],
              "raw_text": "½ cup tomato paste",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035259,
                "name": "tomato paste",
                "created_at": 1495078295,
                "display_plural": "tomato pastes",
                "id": 456,
                "display_singular": "tomato paste"
              }
            },
            {
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "c",
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup"
                  },
                  "quantity": "4",
                  "id": 440610
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "milliliter",
                    "display_plural": "mL",
                    "display_singular": "mL",
                    "abbreviation": "mL"
                  },
                  "quantity": "960",
                  "id": 440609
                }
              ],
              "raw_text": "4 cups chicken stock",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035280,
                "name": "chicken stock",
                "created_at": 1494124570,
                "display_plural": "chicken stocks",
                "id": 196,
                "display_singular": "chicken stock"
              },
              "id": 37349,
              "position": 16
            },
            {
              "ingredient": {
                "created_at": 1493314644,
                "display_plural": "salts",
                "id": 22,
                "display_singular": "salt",
                "updated_at": 1509035288,
                "name": "salt"
              },
              "id": 37350,
              "position": 17,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "1",
                  "id": 440617
                }
              ],
              "raw_text": "1 tablespoon salt",
              "extra_comment": ""
            },
            {
              "ingredient": {
                "updated_at": 1509035289,
                "name": "black pepper",
                "created_at": 1493307183,
                "display_plural": "black peppers",
                "id": 12,
                "display_singular": "black pepper"
              },
              "id": 37351,
              "position": 18,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "½",
                  "id": 440611
                }
              ],
              "raw_text": "½ tablespoon black pepper",
              "extra_comment": ""
            },
            {
              "raw_text": "108 no-boil flat lasagna noodles",
              "extra_comment": "",
              "ingredient": {
                "id": 3969,
                "display_singular": "no-boil flat lasagna noodle",
                "updated_at": 1523904949,
                "name": "no-boil flat lasagna noodle",
                "created_at": 1523904949,
                "display_plural": "no-boil flat lasagna noodles"
              },
              "id": 37352,
              "position": 19,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none",
                    "name": ""
                  },
                  "quantity": "110",
                  "id": 440616
                }
              ]
            },
            {
              "raw_text": "2 cups grated Parmesan",
              "extra_comment": "",
              "ingredient": {
                "display_plural": "grated parmesan cheeses",
                "id": 1869,
                "display_singular": "grated parmesan cheese",
                "updated_at": 1509035159,
                "name": "grated parmesan cheese",
                "created_at": 1497741203
              },
              "id": 37353,
              "position": 20,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "2",
                  "id": 440615
                },
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "220",
                  "id": 440613
                }
              ]
            },
            {
              "extra_comment": "finely chopped",
              "ingredient": {
                "updated_at": 1509035154,
                "name": "fresh chives",
                "created_at": 1498567386,
                "display_plural": "fresh chives",
                "id": 1947,
                "display_singular": "fresh chive"
              },
              "id": 37354,
              "position": 21,
              "measurements": [
                {
                  "id": 440619,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "1"
                },
                {
                  "quantity": "40",
                  "id": 440618,
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  }
                }
              ],
              "raw_text": "1 cup chives, finely chopped"
            }
          ],
          "name": "Meat Sauce",
          "position": 2
        }
      ],
      "compilations": [
        {
          "created_at": 1525373465,
          "thumbnail_alt_text": "",
          "name": "5 Mind-Blowing Layered Recipes",
          "beauty_url": null,
          "buzz_id": null,
          "promotion": "full",
          "aspect_ratio": "1:1",
          "show": [
            {
              "id": 51,
              "name": "Tasty: Tasty Grill"
            }
          ],
          "video_id": 55315,
          "description": null,
          "canonical_id": "compilation:554",
          "facebook_posts": [],
          "draft_status": "published",
          "video_url": "https://vid.tasty.co/output/92413/hls24_1525369560.m3u8",
          "approved_at": 1525404431,
          "id": 554,
          "is_shoppable": false,
          "keywords": null,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/154133.jpg",
          "slug": "5-mind-blowing-layered-recipes",
          "country": "US",
          "language": "eng"
        },
        {
          "is_shoppable": false,
          "thumbnail_alt_text": "",
          "beauty_url": null,
          "slug": "best-of-the-year-6-most-watched-tasty-recipe-videos",
          "aspect_ratio": "1:1",
          "description": null,
          "draft_status": "published",
          "promotion": "full",
          "video_id": 74859,
          "keywords": null,
          "facebook_posts": [],
          "canonical_id": "compilation:834",
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/198462.jpg",
          "video_url": "https://vid.tasty.co/output/121124/hls24_1545433315.m3u8",
          "approved_at": 1546553358,
          "name": "6 Most-Popular Tasty Recipe Videos Of The Year",
          "country": "US",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1545433195,
          "id": 834,
          "buzz_id": null
        },
        {
          "description": null,
          "buzz_id": null,
          "created_at": 1557836218,
          "thumbnail_alt_text": "",
          "beauty_url": null,
          "video_id": 82747,
          "country": "US",
          "facebook_posts": [],
          "approved_at": 1557975833,
          "name": "Tasty's Cheesiest Lasagna Recipes",
          "slug": "tasty-s-cheesiest-lasagna-recipes",
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "keywords": null,
          "show": [
            {
              "id": 17,
              "name": "Tasty"
            }
          ],
          "draft_status": "published",
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/216141.jpg",
          "video_url": "https://vid.tasty.co/output/132723/hls24_1557836770.m3u8",
          "canonical_id": "compilation:951",
          "id": 951,
          "promotion": "full"
        },
        {
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1583851515,
          "canonical_id": "compilation:1432",
          "buzz_id": null,
          "promotion": "full",
          "country": "US",
          "keywords": null,
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/257124.jpg",
          "beauty_url": null,
          "id": 1432,
          "slug": "12-extra-cheesy-layered-lasagna-recipes",
          "aspect_ratio": "1:1",
          "description": null,
          "language": "eng",
          "video_url": "https://vid.tasty.co/output/161574/hls24_1582991941.m3u8",
          "approved_at": 1583891663,
          "is_shoppable": false,
          "facebook_posts": [],
          "thumbnail_alt_text": "",
          "name": "12 Extra Cheesy Layered Lasagna Recipes",
          "video_id": 99978
        },
        {
          "video_url": "https://vid.tasty.co/output/177582/hls24_1598903165.m3u8",
          "canonical_id": "compilation:1684",
          "slug": "tasty-s-best-pasta-recipes",
          "video_id": 112179,
          "is_shoppable": false,
          "facebook_posts": [],
          "draft_status": "published",
          "country": "US",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "language": "eng",
          "name": "Tasty's Best Pasta Recipes",
          "promotion": "full",
          "aspect_ratio": "1:1",
          "keywords": null,
          "description": "Having trouble deciding what you should make next? Take a look at a few of the best pasta recipes we have to offer! From a <a href=\"https://tasty.co/recipe/vegan-mac-n-cheese\">vegan version of mac 'n' cheese</a> to delicious <a href=\"https://tasty.co/recipe/spaghetti-meatball-bake\">baked meatballs and spaghetti</a>, these ideas will satisfy every craving. Pair your pasta with a salad, dessert, and glass of wine — and you've got a restaurant-quality menu right at home!",
          "approved_at": 1600108969,
          "id": 1684,
          "beauty_url": null,
          "buzz_id": null,
          "created_at": 1598896707,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/281005.jpg",
          "thumbnail_alt_text": ""
        },
        {
          "approved_at": 1601298662,
          "canonical_id": "compilation:1711",
          "buzz_id": null,
          "aspect_ratio": "1:1",
          "country": "US",
          "is_shoppable": false,
          "keywords": null,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/283019.jpg",
          "video_url": "https://vid.tasty.co/output/178874/hls24_1600177466.m3u8",
          "video_id": 113584,
          "created_at": 1600174492,
          "description": null,
          "draft_status": "published",
          "name": "Over-The-Top Recipes To Procrastinate Studying Over",
          "slug": "over-the-top-recipes-to-procrastinate-studying-over",
          "facebook_posts": [],
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "thumbnail_alt_text": "",
          "id": 1711,
          "beauty_url": null,
          "promotion": "full"
        },
        {
          "id": 1892,
          "country": "US",
          "keywords": null,
          "created_at": 1606914115,
          "beauty_url": null,
          "buzz_id": null,
          "video_id": 118711,
          "is_shoppable": false,
          "show": [
            {
              "id": 17,
              "name": "Tasty"
            }
          ],
          "description": null,
          "name": "Tasty's Favorite Giant Foods",
          "slug": "tasty-s-favorite-giant-foods",
          "facebook_posts": [],
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/296751.jpg",
          "video_url": "https://vid.tasty.co/output/187008/hls24_1606914812.m3u8",
          "approved_at": 1607958478,
          "canonical_id": "compilation:1892",
          "promotion": "full",
          "aspect_ratio": "1:1",
          "draft_status": "published",
          "thumbnail_alt_text": ""
        },
        {
          "language": "eng",
          "approved_at": 1668718685,
          "id": 3317,
          "beauty_url": null,
          "is_shoppable": false,
          "facebook_posts": [],
          "promotion": "full",
          "buzz_id": null,
          "slug": "recipes-to-cook-for-a-big-family-dinner",
          "aspect_ratio": "1:1",
          "country": "US",
          "thumbnail_url": "https://s3.amazonaws.com/video-api-prod/assets/fa68916e941d481c99136a1051905e44/aaa.jpg",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/254537/hls24_1663561511.m3u8",
          "canonical_id": "compilation:3317",
          "video_id": 168422,
          "keywords": null,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1663562528,
          "description": "Big family dinners are a time for everyone to come together and gather around a table full of delicious eats. Impress everyone with these family-friendly (and family-size!) recipes that are sure to satisfy the whole crew. From a never-ending <a href=\"https://tasty.co/recipe/100-layer-lasagna\"> 100-Layer Lasagna </a> to a filling <a href=\"https://tasty.co/recipe/chili-cheese-casserole\"> Chili Cheese Casserole</a> , these dishes will have everyone coming back for more!",
          "draft_status": "published",
          "name": "Recipes to Cook For a Big Family Dinner!"
        },
        {
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/408066.jpg",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/260391/hls24_1667364329.m3u8",
          "name": "Tasty's Greatest Bites Of All Time",
          "video_id": 172547,
          "description": null,
          "facebook_posts": [],
          "created_at": 1667197570,
          "slug": "tasty-s-greatest-bites-of-all-time",
          "aspect_ratio": "1:1",
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "draft_status": "published",
          "beauty_url": null,
          "promotion": "full",
          "country": "US",
          "language": "eng",
          "approved_at": 1668699347,
          "canonical_id": "compilation:3351",
          "id": 3351,
          "buzz_id": null,
          "keywords": null
        },
        {
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/264409/hls24_1669870722.m3u8",
          "keywords": null,
          "country": "US",
          "is_shoppable": false,
          "description": "End the year with a culinary big bang! 2022 is coming to an end, but your nights shouldn't without tasting these delicious recipes. We have got <a href=\"https://tasty.co/recipe/baked-lobster-tails\">Baked Lobster Tails</a>, <a href=\"https://tasty.co/recipe/creamy-tuscan-chicken\">Creamy Tuscan Chicken</a>, <a href=\"https://tasty.co/recipe/korean-style-bbq-beef\">Korean-Style BBQ Beef</a>, or a <a href=\"https://tasty.co/recipe/20-minute-one-pan-pizza\">20-Minute One-Pan Pizza</a> to cover all of your cravings. Are you convinced or should we go on?",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/411506.jpg",
          "approved_at": 1670358181,
          "buzz_id": null,
          "aspect_ratio": "1:1",
          "language": "eng",
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "created_at": 1668765961,
          "draft_status": "published",
          "name": "Tasty Dinners for Every Night of December",
          "canonical_id": "compilation:3370",
          "id": 3370,
          "beauty_url": null,
          "facebook_posts": [],
          "promotion": "full",
          "video_id": 174237,
          "slug": "tasty-dinner-for-every-night-of-december"
        }
      ],
      "aspect_ratio": "1:1",
      "description": "You won't believe your eyes when you see this 100-layer lasagna! It's a tower of deliciousness filled with layers of pasta, meat sauce, ricotta cheese, and mozzarella cheese. It's like a work of art that you can eat!",
      "updated_at": 1683305451,
      "approved_at": 1523907123,
      "instructions": [
        {
          "end_time": 12883,
          "temperature": null,
          "id": 32688,
          "position": 1,
          "display_text": "Lay down about 6 feet (1.8 meters) of tinfoil on a flat surface. Place place 4 clusters of 2 lasagna noodles towards the left half of the foil sheet, leaving about a ½-inch (1 cm) gap in between each cluster.",
          "start_time": 2833,
          "appliance": null
        },
        {
          "display_text": "Fold the right half of foil over the noodles, pressing flat. To help you see where the noodles are, run your finger along the edges of the noodles to create a rough outline in the foil.",
          "start_time": 12883,
          "appliance": null,
          "end_time": 19383,
          "temperature": null,
          "id": 32689,
          "position": 2
        },
        {
          "end_time": 20716,
          "temperature": null,
          "id": 32690,
          "position": 3,
          "display_text": "Fold the top and bottom flaps of foil over, creasing and pressing flat.",
          "start_time": 19550,
          "appliance": null
        },
        {
          "appliance": null,
          "end_time": 23216,
          "temperature": null,
          "id": 32691,
          "position": 4,
          "display_text": "Flip the foil sheet onto the table so that it’s now standing, then arrange into a square box, using the 4 groups of noodles as a visual guide. Fold and crease over any excess foil to join the ends together, then set aside.",
          "start_time": 20716
        },
        {
          "temperature": null,
          "id": 32692,
          "position": 5,
          "display_text": "In a large pot, melt the butter over medium heat.",
          "start_time": 24216,
          "appliance": null,
          "end_time": 27049
        },
        {
          "display_text": "Whisk in the flour, cooking until the mixture reaches a light golden color.",
          "start_time": 27216,
          "appliance": null,
          "end_time": 32766,
          "temperature": null,
          "id": 32693,
          "position": 6
        },
        {
          "id": 32694,
          "position": 7,
          "display_text": "Slowly drizzle in the milk and bring to a boil, whisking constantly until smooth. Mix in salt, pepper, and nutmeg. Bring to a boil.",
          "start_time": 32933,
          "appliance": null,
          "end_time": 45766,
          "temperature": null
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 32695,
          "position": 8,
          "display_text": "Transfer the béchamel to a large bowl and press plastic wrap onto the surface of the sauce to prevent a skin from forming. Set aside."
        },
        {
          "temperature": null,
          "id": 32696,
          "position": 9,
          "display_text": "Heat oil in a very large pot over high heat. Once the oil begins to shimmer, add the onions, carrots, and celery and cook until the vegetables have started to sweat but aren’t browning.",
          "start_time": 46766,
          "appliance": null,
          "end_time": 52983
        },
        {
          "id": 32697,
          "position": 10,
          "display_text": "Add in the ground beef and use a wooden spoon or spatula to break up the meat into small pieces.",
          "start_time": 53150,
          "appliance": null,
          "end_time": 55666,
          "temperature": null
        },
        {
          "end_time": 58333,
          "temperature": null,
          "id": 32698,
          "position": 11,
          "display_text": "Cook the beef, stirring occasionally, until half of the liquid has evaporated.",
          "start_time": 55666,
          "appliance": null
        },
        {
          "position": 12,
          "display_text": "Add in the tomato sauce, tomato paste, chicken stock, salt, and pepper, stirring to combine evenly and breaking up any last lumps.",
          "start_time": 58500,
          "appliance": null,
          "end_time": 73716,
          "temperature": null,
          "id": 32699
        },
        {
          "display_text": "Turn down the heat to low, and simmer, covered, for about 2 hours.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 32700,
          "position": 13
        },
        {
          "position": 14,
          "display_text": "Preheat oven to 350°F (180°C).",
          "start_time": 0,
          "appliance": "oven",
          "end_time": 0,
          "temperature": 350,
          "id": 32687
        },
        {
          "appliance": null,
          "end_time": 87100,
          "temperature": null,
          "id": 32701,
          "position": 15,
          "display_text": "To assemble, line a greased 9x9-inch (23x23-cm) square baking pan with 2 sheets of foil that extend over the sides.",
          "start_time": 82550
        },
        {
          "start_time": 87266,
          "appliance": null,
          "end_time": 110483,
          "temperature": null,
          "id": 32702,
          "position": 16,
          "display_text": "Spread a thin layer of béchamel on the lined baking pan and top with 2 lasagna noodles. Spread a thin layer of meat sauce evenly across the noodles, followed by a thin layer of béchamel. Repeat the layering process, following the order of: 2 noodles, meat sauce, and béchamel. Alternate the direction of the lasagna sheets after every layer."
        },
        {
          "start_time": 110650,
          "appliance": null,
          "end_time": 117816,
          "temperature": null,
          "id": 32703,
          "position": 17,
          "display_text": "After 50 layers, place the foil box over the lasagna, helping it stay upright and stable."
        },
        {
          "display_text": "Continue with the layering process until the 99th layer.",
          "start_time": 117983,
          "appliance": null,
          "end_time": 136366,
          "temperature": null,
          "id": 32704,
          "position": 18
        },
        {
          "id": 32705,
          "position": 19,
          "display_text": "Sprinkle Parmesan on top, then cover the whole lasagna with foil.",
          "start_time": 136366,
          "appliance": null,
          "end_time": 148700,
          "temperature": null
        },
        {
          "position": 20,
          "display_text": "Bake for about 1½ hours, uncovering the foil halfway, until the top is a deep golden brown.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 32706
        },
        {
          "id": 32707,
          "position": 21,
          "display_text": "Cool for at least 2 hours, then carefully lift out the lasagna with the foil sleeves onto a large cutting board.",
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null
        },
        {
          "end_time": 162416,
          "temperature": null,
          "id": 32708,
          "position": 22,
          "display_text": "Peel away the foil walls, then sprinkle the top of the lasagna generously with chives.",
          "start_time": 154700,
          "appliance": null
        },
        {
          "appliance": null,
          "end_time": 186966,
          "temperature": null,
          "id": 32709,
          "position": 23,
          "display_text": "Cut and serve.",
          "start_time": 163916
        },
        {
          "start_time": 188466,
          "appliance": null,
          "end_time": 195683,
          "temperature": null,
          "id": 32721,
          "position": 24,
          "display_text": "Enjoy!"
        }
      ],
      "brand": null,
      "renditions": [
        {
          "file_size": 67222368,
          "width": 720,
          "minimum_bit_rate": null,
          "duration": 207122,
          "bit_rate": 2597,
          "content_type": "video/mp4",
          "aspect": "square",
          "name": "mp4_720x720",
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/89658/square_720/1523902408_00001.png",
          "url": "https://vid.tasty.co/output/89658/square_720/1523902408",
          "maximum_bit_rate": null,
          "height": 720
        },
        {
          "duration": 207122,
          "aspect": "square",
          "width": 320,
          "name": "mp4_320x320",
          "maximum_bit_rate": null,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/89658/square_320/1523902408_00001.png",
          "url": "https://vid.tasty.co/output/89658/square_320/1523902408",
          "bit_rate": 875,
          "content_type": "video/mp4",
          "minimum_bit_rate": null,
          "height": 320,
          "container": "mp4",
          "file_size": 22630857
        },
        {
          "width": 720,
          "height": 720,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/89658/landscape_720/1523902408_00001.png",
          "url": "https://vid.tasty.co/output/89658/landscape_720/1523902408",
          "bit_rate": 2594,
          "aspect": "square",
          "maximum_bit_rate": null,
          "file_size": 67155286,
          "duration": 207122,
          "content_type": "video/mp4",
          "minimum_bit_rate": null,
          "name": "mp4_720x720"
        },
        {
          "file_size": 38707125,
          "bit_rate": 1496,
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 480,
          "height": 480,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/89658/landscape_480/1523902408_00001.png",
          "url": "https://vid.tasty.co/output/89658/landscape_480/1523902408",
          "duration": 207122,
          "minimum_bit_rate": null,
          "name": "mp4_480x480",
          "maximum_bit_rate": null
        },
        {
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/89658/1445289064805-h2exzu/1523902408_00001.png",
          "url": "https://vid.tasty.co/output/89658/hls24_1523902408.m3u8",
          "bit_rate": null,
          "name": "low",
          "maximum_bit_rate": 4514,
          "container": "ts",
          "file_size": null,
          "duration": 207124,
          "content_type": "application/vnd.apple.mpegurl",
          "aspect": "square",
          "width": 1080,
          "minimum_bit_rate": 272,
          "height": 1080
        }
      ],
      "seo_title": null,
      "buzz_id": null,
      "draft_status": "published",
      "inspired_by_url": null,
      "promotion": "partial",
      "video_id": 42294,
      "price": {
        "total": 5100,
        "updated_at": "2023-07-02T07:05:39+02:00",
        "portion": 250,
        "consumption_total": 3950,
        "consumption_portion": 200
      },
      "prep_time_minutes": null,
      "is_one_top": false,
      "beauty_url": "https://img.buzzfeed.com/video-api-prod/assets/15cf3ad98d504be0abbfd2efa30c5c5a/BFV35527_100LayerLasagna-Beauty.jpg",
      "is_shoppable": true,
      "total_time_tier": null,
      "video_ad_content": "none",
      "tags": [
        {
          "root_tag_type": "cuisine",
          "name": "north_american",
          "id": 64444,
          "display_name": "North American",
          "type": "cuisine"
        },
        {
          "root_tag_type": "cuisine",
          "name": "italian",
          "id": 64453,
          "display_name": "Italian",
          "type": "european"
        },
        {
          "type": "cooking_style",
          "root_tag_type": "cooking_style",
          "name": "comfort_food",
          "id": 64462,
          "display_name": "Comfort Food"
        },
        {
          "root_tag_type": "meal",
          "name": "dinner",
          "id": 64486,
          "display_name": "Dinner",
          "type": "meal"
        },
        {
          "id": 64492,
          "display_name": "Baking",
          "type": "appliance",
          "root_tag_type": "appliance",
          "name": "baking"
        },
        {
          "root_tag_type": "cuisine",
          "name": "fusion",
          "id": 65410,
          "display_name": "Fusion",
          "type": "cuisine"
        },
        {
          "name": "stove_top",
          "id": 65848,
          "display_name": "Stove Top",
          "type": "appliance",
          "root_tag_type": "appliance"
        },
        {
          "root_tag_type": "cooking_style",
          "name": "big_batch",
          "id": 65851,
          "display_name": "Big Batch",
          "type": "cooking_style"
        },
        {
          "name": "special_occasion",
          "id": 188967,
          "display_name": "Special Occasion",
          "type": "occasion",
          "root_tag_type": "seasonal"
        },
        {
          "root_tag_type": "equipment",
          "name": "oven_mitts",
          "id": 1247775,
          "display_name": "Oven Mitts",
          "type": "equipment"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "sauce_pan",
          "id": 1247786,
          "display_name": "Sauce Pan"
        },
        {
          "root_tag_type": "equipment",
          "name": "spatula",
          "id": 1247788,
          "display_name": "Spatula",
          "type": "equipment"
        },
        {
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "whisk",
          "id": 1247793,
          "display_name": "Whisk"
        },
        {
          "root_tag_type": "equipment",
          "name": "baking_pan",
          "id": 1280500,
          "display_name": "Baking Pan",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "chefs_knife",
          "id": 1280501,
          "display_name": "Chef's Knife",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "liquid_measuring_cup",
          "id": 1280506,
          "display_name": "Liquid Measuring Cup",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "dry_measuring_cups",
          "id": 1280507,
          "display_name": "Dry Measuring Cups",
          "type": "equipment"
        },
        {
          "name": "measuring_spoons",
          "id": 1280508,
          "display_name": "Measuring Spoons",
          "type": "equipment",
          "root_tag_type": "equipment"
        },
        {
          "id": 1280511,
          "display_name": "Offset Spatula",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "offset_spatula"
        },
        {
          "display_name": "Tips Viral",
          "type": "feature_page",
          "root_tag_type": "feature_page",
          "name": "tips_viral",
          "id": 6718867
        },
        {
          "name": "high_protein",
          "id": 8091917,
          "display_name": "High-Protein",
          "type": "healthy",
          "root_tag_type": "healthy"
        },
        {
          "root_tag_type": "healthy",
          "name": "high_fiber",
          "id": 8091920,
          "display_name": "High-Fiber",
          "type": "healthy"
        }
      ],
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/150087.jpg",
      "created_at": 1523835443,
      "credits": [
        {
          "name": "Alvin Zhou",
          "type": "internal"
        }
      ],
      "servings_noun_plural": "servings",
      "canonical_id": "recipe:3746",
      "country": "US",
      "tips_and_ratings_enabled": true,
      "facebook_posts": [],
      "language": "eng",
      "id": 3746,
      "slug": "100-layer-lasagna",
      "show_id": 17,
      "nutrition": {
        "updated_at": "2021-05-03T13:25:42+02:00",
        "protein": 52,
        "fat": 45,
        "calories": 914,
        "sugar": 16,
        "carbohydrates": 55,
        "fiber": 5
      },
      "nutrition_visibility": "auto",
      "keywords": "100 layer lasagna, behind the scenes 100 layer lasagna, how to make lasagna, hundred layer lasagna, lasagna recipe, tasty lasagna"
    },
    {
      "draft_status": "published",
      "thumbnail_alt_text": "",
      "servings_noun_plural": "tacos",
      "seo_title": "",
      "keywords": "al pastor, avocado, butternut squash, meatless, pineapple, tacos, tortilla, vegan",
      "facebook_posts": [],
      "tips_and_ratings_enabled": true,
      "aspect_ratio": "1:1",
      "video_id": 98745,
      "credits": [
        {
          "name": "Betsy Carter",
          "type": "internal"
        }
      ],
      "total_time_tier": {
        "tier": "under_1.5_hours",
        "display_tier": "Under 1.5 hours"
      },
      "country": "US",
      "id": 5974,
      "buzz_id": null,
      "description": "Al pastor’s signature red-hued marinade produces flavorful bites of whatever it coats. Traditionally used to marinate meat, you can also enjoy the same punch of flavor with a vegan alternative. Here, we use butternut squash for its hearty texture and subtle sweetness, which play well with the warm al pastor spices.",
      "video_ad_content": "none",
      "instructions": [
        {
          "start_time": 0,
          "appliance": "oven",
          "end_time": 0,
          "temperature": 350,
          "id": 53389,
          "position": 1,
          "display_text": "Preheat the oven to 350°F (180°C). Line 2 baking sheets with parchment paper."
        },
        {
          "id": 53390,
          "position": 2,
          "display_text": "In a large bowl, toss the butternut squash with the achiote powder, ancho chile powder, garlic powder, onion powder, coriander, thyme, cumin, salt, black pepper, cayenne, apple cider vinegar, orange juice, and 2 tablespoons of olive oil until well coated. Spread the butternut squash in an even layer on a prepared baking sheet.",
          "start_time": 7999,
          "appliance": null,
          "end_time": 36000,
          "temperature": null
        },
        {
          "start_time": 0,
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 53391,
          "position": 3,
          "display_text": "Bake the squash for 45 minutes, tossing halfway, until deepened in color and the spices have darkened."
        },
        {
          "start_time": 48333,
          "appliance": null,
          "end_time": 62000,
          "temperature": null,
          "id": 53392,
          "position": 4,
          "display_text": "Add the pineapple to the same bowl where the butternut squash was seasoned and toss to coat in the remaining marinade. Spread in an even layer on the remaining prepared baking sheet."
        },
        {
          "appliance": null,
          "end_time": 0,
          "temperature": null,
          "id": 53393,
          "position": 5,
          "display_text": "Bake the pineapple for 25–30 minutes, until softened and slightly shrunken.",
          "start_time": 0
        },
        {
          "temperature": null,
          "id": 53394,
          "position": 6,
          "display_text": "Toss the roasted butternut squash with the remaining 2 tablespoons of olive oil on the baking sheet.",
          "start_time": 66000,
          "appliance": null,
          "end_time": 75833
        },
        {
          "display_text": "Warm the tortillas, one at a time, directly over a medium flame on a stovetop burner until the edges are charred and the tortillas are pliable. Keep warm by wrapping in a kitchen towel while you repeat with the remaining tortillas. Alternatively, microwave the tortillas until warmed through.",
          "start_time": 80000,
          "appliance": null,
          "end_time": 86833,
          "temperature": null,
          "id": 53395,
          "position": 7
        },
        {
          "display_text": "To assemble the tacos, spoon butternut squash and pineapple into each tortilla. Top with onion, cilantro, and avocado. Serve with lime wedges.",
          "start_time": 90000,
          "appliance": null,
          "end_time": 107333,
          "temperature": null,
          "id": 53396,
          "position": 8
        },
        {
          "end_time": 112833,
          "temperature": null,
          "id": 53397,
          "position": 9,
          "display_text": "Enjoy!",
          "start_time": 109000,
          "appliance": null
        }
      ],
      "user_ratings": {
        "count_positive": 182,
        "score": 0.914573,
        "count_negative": 17
      },
      "brand_id": null,
      "inspired_by_url": null,
      "approved_at": 1579062944,
      "yields": "Makes 14-16 tacos",
      "seo_path": null,
      "brand": null,
      "slug": "vegan-butternut-squash-al-pastor-tacos",
      "num_servings": 14,
      "total_time_minutes": 65,
      "updated_at": 1579062943,
      "canonical_id": "recipe:5974",
      "cook_time_minutes": 45,
      "nutrition_visibility": "auto",
      "sections": [
        {
          "components": [
            {
              "ingredient": {
                "id": 465,
                "display_singular": "butternut squash",
                "updated_at": 1509035258,
                "name": "butternut squash",
                "created_at": 1495131523,
                "display_plural": "butternut squashes"
              },
              "id": 64740,
              "position": 1,
              "measurements": [
                {
                  "quantity": "1",
                  "id": 729404,
                  "unit": {
                    "system": "none",
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": ""
                  }
                }
              ],
              "raw_text": "1 medium butternut squash, peeled, seeded, and cut into ½-inch cubes",
              "extra_comment": "peeled, seeded, and cut into ½-inch cubes"
            },
            {
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1573093416,
                "name": "achiote",
                "created_at": 1573093416,
                "display_plural": "achiotes",
                "id": 5897,
                "display_singular": "achiote"
              },
              "id": 64741,
              "position": 2,
              "measurements": [
                {
                  "unit": {
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial"
                  },
                  "quantity": "1 ½",
                  "id": 729407
                }
              ],
              "raw_text": "1½ teaspoons achiote powder"
            },
            {
              "measurements": [
                {
                  "unit": {
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons"
                  },
                  "quantity": "1 ½",
                  "id": 729409
                }
              ],
              "raw_text": "1½ teaspoons ancho chile powder",
              "extra_comment": "",
              "ingredient": {
                "id": 5642,
                "display_singular": "ancho chile powder",
                "updated_at": 1564858561,
                "name": "ancho chile powder",
                "created_at": 1564858561,
                "display_plural": "ancho chile powders"
              },
              "id": 64742,
              "position": 3
            },
            {
              "raw_text": "1½ teaspoons garlic powder",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035289,
                "name": "garlic powder",
                "created_at": 1493307128,
                "display_plural": "garlic powders",
                "id": 9,
                "display_singular": "garlic powder"
              },
              "id": 64743,
              "position": 4,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1 ½",
                  "id": 729396
                }
              ]
            },
            {
              "extra_comment": "",
              "ingredient": {
                "display_singular": "onion powder",
                "updated_at": 1509035289,
                "name": "onion powder",
                "created_at": 1493307116,
                "display_plural": "onion powders",
                "id": 8
              },
              "id": 64744,
              "position": 5,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1 ½",
                  "id": 729393
                }
              ],
              "raw_text": "1½ teaspoons onion powder"
            },
            {
              "position": 6,
              "measurements": [
                {
                  "unit": {
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons"
                  },
                  "quantity": "1 ½",
                  "id": 729408
                }
              ],
              "raw_text": "1½ teaspoons ground coriander",
              "extra_comment": "",
              "ingredient": {
                "name": "ground coriander",
                "created_at": 1514573041,
                "display_plural": "ground corianders",
                "id": 3469,
                "display_singular": "ground coriander",
                "updated_at": 1514573041
              },
              "id": 64745
            },
            {
              "id": 64746,
              "position": 7,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1 ½",
                  "id": 729399
                }
              ],
              "raw_text": "1½ teaspoons dried thyme",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1493430190,
                "display_plural": "dried thymes",
                "id": 47,
                "display_singular": "dried thyme",
                "updated_at": 1509035286,
                "name": "dried thyme"
              }
            },
            {
              "measurements": [
                {
                  "unit": {
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon"
                  },
                  "quantity": "2",
                  "id": 729400
                }
              ],
              "raw_text": "2 teaspoons ground cumin",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035267,
                "name": "ground cumin",
                "created_at": 1494963477,
                "display_plural": "ground cumins",
                "id": 357,
                "display_singular": "ground cumin"
              },
              "id": 64747,
              "position": 8
            },
            {
              "id": 64748,
              "position": 9,
              "measurements": [
                {
                  "quantity": "1",
                  "id": 729390,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  }
                }
              ],
              "raw_text": "1 teaspoon kosher salt",
              "extra_comment": "",
              "ingredient": {
                "id": 11,
                "display_singular": "kosher salt",
                "updated_at": 1509035289,
                "name": "kosher salt",
                "created_at": 1493307153,
                "display_plural": "kosher salts"
              }
            },
            {
              "ingredient": {
                "updated_at": 1509035289,
                "name": "black pepper",
                "created_at": 1493307183,
                "display_plural": "black peppers",
                "id": 12,
                "display_singular": "black pepper"
              },
              "id": 64749,
              "position": 10,
              "measurements": [
                {
                  "id": 729389,
                  "unit": {
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons",
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp"
                  },
                  "quantity": "1"
                }
              ],
              "raw_text": "1 teaspoon black pepper",
              "extra_comment": ""
            },
            {
              "measurements": [
                {
                  "quantity": "½",
                  "id": 729405,
                  "unit": {
                    "display_singular": "teaspoon",
                    "abbreviation": "tsp",
                    "system": "imperial",
                    "name": "teaspoon",
                    "display_plural": "teaspoons"
                  }
                }
              ],
              "raw_text": "½ teaspoon cayenne",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1501634171,
                "display_plural": "cayennes",
                "id": 2786,
                "display_singular": "cayenne",
                "updated_at": 1509035109,
                "name": "cayenne"
              },
              "id": 64750,
              "position": 11
            },
            {
              "raw_text": "1 tablespoon apple cider vinegar",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035268,
                "name": "apple cider vinegar",
                "created_at": 1494882105,
                "display_plural": "apple cider vinegars",
                "id": 345,
                "display_singular": "apple cider vinegar"
              },
              "id": 64751,
              "position": 12,
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "1",
                  "id": 729406
                }
              ]
            },
            {
              "measurements": [
                {
                  "unit": {
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons",
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp"
                  },
                  "quantity": "3",
                  "id": 729398
                }
              ],
              "raw_text": "3 tablespoons orange juice",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1509035256,
                "name": "orange juice",
                "created_at": 1495141563,
                "display_plural": "orange juices",
                "id": 485,
                "display_singular": "orange juice"
              },
              "id": 64752,
              "position": 13
            },
            {
              "raw_text": "4 tablespoons extra-virgin olive oil, divided",
              "extra_comment": "divided",
              "ingredient": {
                "name": "extra-virgin olive oil",
                "created_at": 1518321288,
                "display_plural": "extra-virgin olive oils",
                "id": 3678,
                "display_singular": "extra-virgin olive oil",
                "updated_at": 1518321288
              },
              "id": 64753,
              "position": 14,
              "measurements": [
                {
                  "unit": {
                    "display_singular": "tablespoon",
                    "abbreviation": "tbsp",
                    "system": "imperial",
                    "name": "tablespoon",
                    "display_plural": "tablespoons"
                  },
                  "quantity": "4",
                  "id": 729388
                }
              ]
            },
            {
              "raw_text": "2 cups cubed pineapple",
              "extra_comment": "",
              "ingredient": {
                "display_singular": "cubed pineapple",
                "updated_at": 1681310874,
                "name": "cubed pineapple",
                "created_at": 1681310874,
                "display_plural": "cubed pineapples",
                "id": 11058
              },
              "id": 64754,
              "position": 15,
              "measurements": [
                {
                  "id": 729392,
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "490"
                },
                {
                  "id": 729391,
                  "unit": {
                    "system": "imperial",
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c"
                  },
                  "quantity": "2"
                }
              ]
            }
          ],
          "name": null,
          "position": 1
        },
        {
          "position": 2,
          "components": [
            {
              "position": 17,
              "measurements": [
                {
                  "unit": {
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none",
                    "name": ""
                  },
                  "quantity": "12",
                  "id": 729403
                }
              ],
              "raw_text": "12-14 small corn tortillas",
              "extra_comment": "",
              "ingredient": {
                "updated_at": 1681310882,
                "name": "small corn tortillas",
                "created_at": 1681310882,
                "display_plural": "small corn tortillas",
                "id": 11059,
                "display_singular": "small corn tortilla"
              },
              "id": 64756
            },
            {
              "raw_text": "½ medium white onion, diced",
              "extra_comment": "diced",
              "ingredient": {
                "display_singular": "medium white onion",
                "updated_at": 1509035180,
                "name": "medium white onion",
                "created_at": 1496848868,
                "display_plural": "medium white onions",
                "id": 1560
              },
              "id": 64757,
              "position": 18,
              "measurements": [
                {
                  "quantity": "½",
                  "id": 729402,
                  "unit": {
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none",
                    "name": ""
                  }
                }
              ]
            },
            {
              "raw_text": "1 cup fresh cilantro leaves",
              "extra_comment": "",
              "ingredient": {
                "created_at": 1527199111,
                "display_plural": "fresh cilantro leaves",
                "id": 4163,
                "display_singular": "fresh cilantro leaf",
                "updated_at": 1527199111,
                "name": "fresh cilantro leaves"
              },
              "id": 64758,
              "position": 19,
              "measurements": [
                {
                  "unit": {
                    "system": "metric",
                    "name": "gram",
                    "display_plural": "g",
                    "display_singular": "g",
                    "abbreviation": "g"
                  },
                  "quantity": "40",
                  "id": 729395
                },
                {
                  "unit": {
                    "name": "cup",
                    "display_plural": "cups",
                    "display_singular": "cup",
                    "abbreviation": "c",
                    "system": "imperial"
                  },
                  "quantity": "1",
                  "id": 729394
                }
              ]
            },
            {
              "id": 64759,
              "position": 20,
              "measurements": [
                {
                  "unit": {
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none"
                  },
                  "quantity": "1",
                  "id": 729401
                }
              ],
              "raw_text": "1 avocado, sliced",
              "extra_comment": "sliced",
              "ingredient": {
                "updated_at": 1509035215,
                "name": "avocado",
                "created_at": 1496185911,
                "display_plural": "avocados",
                "id": 1005,
                "display_singular": "avocado"
              }
            },
            {
              "measurements": [
                {
                  "unit": {
                    "name": "",
                    "display_plural": "",
                    "display_singular": "",
                    "abbreviation": "",
                    "system": "none"
                  },
                  "quantity": "4",
                  "id": 729397
                }
              ],
              "raw_text": "4 limes, cut into wedges",
              "extra_comment": "cut into wedges",
              "ingredient": {
                "updated_at": 1678465472,
                "name": "limes",
                "created_at": 1678465472,
                "display_plural": "limes",
                "id": 10776,
                "display_singular": "lime"
              },
              "id": 64760,
              "position": 21
            }
          ],
          "name": "For Serving"
        }
      ],
      "name": "Vegan Butternut Squash Al Pastor Tacos",
      "compilations": [
        {
          "video_url": "https://vid.tasty.co/output/173405/hls24_1594979834.m3u8",
          "name": "6 Recipes for Taco Night!",
          "slug": "6-recipes-for-taco-night",
          "promotion": "full",
          "aspect_ratio": "1:1",
          "country": "US",
          "beauty_url": null,
          "buzz_id": null,
          "video_id": 108591,
          "canonical_id": "compilation:1583",
          "id": 1583,
          "language": "eng",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/274573.jpg",
          "is_shoppable": false,
          "created_at": 1594979620,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ],
          "description": "Need new ideas for the next Taco Tuesday with family? Try out these recipes! You could start off with delicious Mexican-style <a href=\"https://tasty.co/recipe/mexican-style-pork-tacos-tacos-al-pastor\">pork tacos</a>, or if you need something vegan-friendly, this <a href=\"https://tasty.co/recipe/vegan-butternut-squash-al-pastor-tacos\">butternut squash</a> version would be a perfect choice. Don't forget to serve everything up with a side of chips and plenty of guacamole!",
          "draft_status": "published",
          "thumbnail_alt_text": "",
          "approved_at": 1595336346,
          "keywords": null,
          "facebook_posts": []
        },
        {
          "keywords": null,
          "created_at": 1608843423,
          "description": null,
          "canonical_id": "compilation:2015",
          "buzz_id": null,
          "slug": "goodful-s-top-ten-vegan-recipes-of-2020",
          "aspect_ratio": "1:1",
          "facebook_posts": [],
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "language": "eng",
          "id": 2015,
          "promotion": "full",
          "country": "US",
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/301575.jpg",
          "video_id": 121909,
          "is_shoppable": false,
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/189684/hls24_1608844177.m3u8",
          "approved_at": 1609343019,
          "name": "Goodful's Top Ten Vegan Recipes of 2020",
          "beauty_url": null
        },
        {
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "language": "eng",
          "video_url": "https://vid.tasty.co/output/198373/hls24_1617283211.m3u8",
          "approved_at": 1618492437,
          "canonical_id": "compilation:2274",
          "slug": "vegan-versions-of-your-favorite-fast-foods",
          "aspect_ratio": "1:1",
          "facebook_posts": [],
          "draft_status": "published",
          "video_id": 127712,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/315420.jpg",
          "id": 2274,
          "beauty_url": null,
          "buzz_id": null,
          "promotion": "full",
          "name": "Vegan Versions Of Your Favorite Fast Foods",
          "country": "US",
          "is_shoppable": false,
          "keywords": null,
          "created_at": 1617282606,
          "description": null,
          "thumbnail_alt_text": ""
        },
        {
          "thumbnail_alt_text": "",
          "id": 2291,
          "buzz_id": null,
          "country": "US",
          "is_shoppable": false,
          "language": "eng",
          "canonical_id": "compilation:2291",
          "slug": "3-course-vegan-meals-for-the-week",
          "video_id": 129603,
          "facebook_posts": [],
          "description": null,
          "name": "3-Course Vegan Meals For The Week",
          "created_at": 1618382352,
          "draft_status": "published",
          "promotion": "full",
          "aspect_ratio": "1:1",
          "keywords": null,
          "show": [
            {
              "name": "Goodful",
              "id": 34
            }
          ],
          "beauty_url": null,
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/317692.jpg",
          "video_url": "https://vid.tasty.co/output/199954/hls24_1618578573.m3u8",
          "approved_at": 1619445148
        },
        {
          "keywords": null,
          "facebook_posts": [],
          "created_at": 1622451299,
          "id": 2500,
          "beauty_url": null,
          "aspect_ratio": "1:1",
          "country": "US",
          "name": "Recipes For All The Vegans",
          "slug": "recipes-for-all-the-vegans",
          "promotion": "full",
          "thumbnail_alt_text": "",
          "video_url": "https://vid.tasty.co/output/204619/hls24_1622451445.m3u8",
          "buzz_id": null,
          "language": "eng",
          "approved_at": 1624553701,
          "description": "Vegan food has come a long way: gone are the days of just salads. Give your tacos a healthy, vegan twist with our scruptious <a href=\"https://tasty.co/recipe/vegan-butternut-squash-al-pastor-tacos\"Vegan Butternut Squash Tacos</a>. Chase them down with the <a href=\"https://tasty.co/recipe/the-best-ever-vegan-brownies\"Best Ever Vegan Brownies</a>: there are no rules! Try these vegan recipes today — you won't regret it.",
          "draft_status": "published",
          "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/324378.jpg",
          "canonical_id": "compilation:2500",
          "video_id": 131746,
          "is_shoppable": false,
          "show": [
            {
              "name": "Tasty",
              "id": 17
            }
          ]
        }
      ],
      "original_video_url": "https://s3.amazonaws.com/video-api-prod/assets/6145380ba30c47da9f34d0f0304a8d48/veganalpastor_OO_cut1.mp4",
      "promotion": "partial",
      "tags": [
        {
          "name": "mexican",
          "id": 64457,
          "display_name": "Mexican",
          "type": "north_american",
          "root_tag_type": "cuisine"
        },
        {
          "root_tag_type": "dietary",
          "name": "dairy_free",
          "id": 64463,
          "display_name": "Dairy-Free",
          "type": "dietary"
        },
        {
          "root_tag_type": "meal",
          "name": "dinner",
          "id": 64486,
          "display_name": "Dinner",
          "type": "meal"
        },
        {
          "root_tag_type": "meal",
          "name": "lunch",
          "id": 64489,
          "display_name": "Lunch",
          "type": "meal"
        },
        {
          "type": "appliance",
          "root_tag_type": "appliance",
          "name": "baking",
          "id": 64492,
          "display_name": "Baking"
        },
        {
          "type": "cooking_style",
          "root_tag_type": "cooking_style",
          "name": "big_batch",
          "id": 65851,
          "display_name": "Big Batch"
        },
        {
          "root_tag_type": "equipment",
          "name": "oven_mitts",
          "id": 1247775,
          "display_name": "Oven Mitts",
          "type": "equipment"
        },
        {
          "id": 1247790,
          "display_name": "Tongs",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "tongs"
        },
        {
          "root_tag_type": "equipment",
          "name": "baking_pan",
          "id": 1280500,
          "display_name": "Baking Pan",
          "type": "equipment"
        },
        {
          "id": 1280501,
          "display_name": "Chef's Knife",
          "type": "equipment",
          "root_tag_type": "equipment",
          "name": "chefs_knife"
        },
        {
          "root_tag_type": "equipment",
          "name": "cutting_board",
          "id": 1280503,
          "display_name": "Cutting Board",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "dry_measuring_cups",
          "id": 1280507,
          "display_name": "Dry Measuring Cups",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "measuring_spoons",
          "id": 1280508,
          "display_name": "Measuring Spoons",
          "type": "equipment"
        },
        {
          "root_tag_type": "equipment",
          "name": "mixing_bowl",
          "id": 1280510,
          "display_name": "Mixing Bowl",
          "type": "equipment"
        },
        {
          "type": "business_tags",
          "root_tag_type": "business_tags",
          "name": "light_bites",
          "id": 5949791,
          "display_name": "Light Bites"
        },
        {
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "low_calorie",
          "id": 8091916,
          "display_name": "Low-Calorie"
        },
        {
          "display_name": "Low-Sugar",
          "type": "healthy",
          "root_tag_type": "healthy",
          "name": "low_sugar",
          "id": 8091918
        },
        {
          "root_tag_type": "feature_page",
          "name": "dole_hearty_meals",
          "id": 8719451,
          "display_name": "Dole Hearty Meals",
          "type": "feature_page"
        }
      ],
      "video_url": "https://vid.tasty.co/output/157291/hls24_1578681763.m3u8",
      "beauty_url": null,
      "is_shoppable": true,
      "created_at": 1578681903,
      "renditions": [
        {
          "url": "https://vid.tasty.co/output/157291/square_720/1578681763",
          "bit_rate": 2466,
          "name": "mp4_720x720",
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 720,
          "minimum_bit_rate": null,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/157291/square_720/1578681763_00001.png",
          "file_size": 35808254,
          "duration": 116193,
          "maximum_bit_rate": null,
          "height": 720
        },
        {
          "file_size": 11286536,
          "url": "https://vid.tasty.co/output/157291/square_320/1578681763",
          "bit_rate": 778,
          "minimum_bit_rate": null,
          "name": "mp4_320x320",
          "maximum_bit_rate": null,
          "height": 320,
          "container": "mp4",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/157291/square_320/1578681763_00001.png",
          "duration": 116193,
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 320
        },
        {
          "file_size": 35781569,
          "duration": 116193,
          "content_type": "video/mp4",
          "aspect": "square",
          "minimum_bit_rate": null,
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/157291/landscape_720/1578681763_00001.png",
          "url": "https://vid.tasty.co/output/157291/landscape_720/1578681763",
          "bit_rate": 2464,
          "width": 720,
          "name": "mp4_720x720",
          "maximum_bit_rate": null,
          "height": 720,
          "container": "mp4"
        },
        {
          "maximum_bit_rate": null,
          "height": 480,
          "container": "mp4",
          "file_size": 19933461,
          "content_type": "video/mp4",
          "aspect": "square",
          "width": 480,
          "minimum_bit_rate": null,
          "name": "mp4_480x480",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/157291/landscape_480/1578681763_00001.png",
          "url": "https://vid.tasty.co/output/157291/landscape_480/1578681763",
          "duration": 116193,
          "bit_rate": 1373
        },
        {
          "url": "https://vid.tasty.co/output/157291/hls24_1578681763.m3u8",
          "duration": 116200,
          "aspect": "square",
          "minimum_bit_rate": 274,
          "name": "low",
          "maximum_bit_rate": 4443,
          "height": 1080,
          "container": "ts",
          "poster_url": "https://img.buzzfeed.com/video-transcoder-prod/output/157291/1445289064805-h2exzu/1578681763_00001.png",
          "file_size": null,
          "bit_rate": null,
          "content_type": "application/vnd.apple.mpegurl",
          "width": 1080
        }
      ],
      "topics": [
        {
          "name": "Vegan",
          "slug": "vegan"
        },
        {
          "slug": "light-bites",
          "name": "Light Bites"
        },
        {
          "name": "Lunch",
          "slug": "lunch"
        },
        {
          "name": "Dinner",
          "slug": "dinner"
        },
        {
          "name": "Mexican",
          "slug": "mexican"
        }
      ],
      "servings_noun_singular": "taco",
      "prep_time_minutes": 20,
      "nutrition": {
        "carbohydrates": 26,
        "fiber": 4,
        "updated_at": "2021-05-03T13:22:07+02:00",
        "protein": 2,
        "fat": 6,
        "calories": 158,
        "sugar": 5
      },
      "show": {
        "name": "Tasty",
        "id": 17
      },
      "is_one_top": false,
      "language": "eng",
      "price": {
        "consumption_total": 1300,
        "consumption_portion": 100,
        "total": 2200,
        "updated_at": "2023-07-02T07:20:38+02:00",
        "portion": 150
      },
      "show_id": 17,
      "thumbnail_url": "https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/251104.jpg"
    }
  ],
      dishesApi: "http://localhost/FinalProject/api/rest/api/V1/recipeApi.php",
      localResult: [], // we will put the array compared in this one.
      searchValue: "&q=",
      pageNumber: 0,
      dataIsReturn: true
    }
  },

  methods: {
    async getRecipeList() {
      let url = `https://tasty.p.rapidapi.com/recipes/list?from=${this.pageNumber}&size=10`;
      const options = {
        method: 'GET',
        headers: {
          'X-RapidAPI-Key': '5797d19803mshd474a7ef8d65541p1b0cacjsn91d219ec7fd1',
          'X-RapidAPI-Host': 'tasty.p.rapidapi.com'
        }
      };

      if(this.searchValue != "&q="){
        url += this.searchValue;
      }

      try {
        const response = await fetch(url, options);
        const result = await response.text();
        const recipeList = JSON.parse(result);
        this.apiList = recipeList.results;
        console.log(url);
        this.dataIsReturn = true;
      } catch (error) {
        console.error(error);
      }
    },

    // put the event in the localResult array
    searchRecipe(e) {
      this.localResult = e;
    },

    searchVal(e) {
      this.searchValue = e;
      this.pageNumber = 0;
      this.getRecipeList();
    },

    pageSelector(selector){
      if(selector == "prev" && this.pageNumber>0){
        this.pageNumber = this.pageNumber - 8;
        this.getRecipeList();
      }
      else if(selector == "next"){
        this.pageNumber = this.pageNumber + 8;
        this.getRecipeList();
      }
    },

    // check if theres any slots in the array
    checkSearch() {
      if (this.localResult.length > 0) {
        return true;
      } else {
        return false;
      }
    }

  },
    created() {
      // this.getRecipeList();
    }
}
</script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');

body {
  font-family: 'Comfortaa', sans-serif;
}

* {
    margin: 0;
    padding: 0;
}


/* mobile version */
@media (min-width: 300px) {
  
  .HomePage{
    /* width: 90%;
    height: 100%; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .search-bar{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 5vh;
  }

  .search-bar > form{
    display: flex;
    align-items: center;
    column-gap: 2vw;
  }

  .search{
    width: 35vh;
    border-radius: 5px;
    border: 1px solid lightgray;
    padding: 5px;
  }

  .fa-magnifying-glass{
    color: lightgray;
  }

  .search::placeholder{
    text-align: center;
  }

  .search:hover{
    background-color: lightgray;
    border: 1px solid dimgray;
  }

  .searchBtn{
    background-color: transparent;
    border: none;
    font-size: 20px;
    transition: .5s;
  }

  .pageBtn{
    display: flex;
    column-gap: 10vw;
  }

  .pageBtn > button{
    padding: 1vh;
    color: whitesmoke;
    background-color: #316318;
    border: 3px solid #316318;
    border-radius: 10px;
    font-size: 16px;
    transition: .5s;
  }

  .dishGallery ul {
    width: 90%;
    padding-left: 5vh;
    list-style: none;
    display: flex;
    flex-direction: column;
    row-gap: 5vh;
  }

  .cardFigure{
    width: 35vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 3px -2px 10px 4px gainsboro;

  }

  .cardFigure img{
    position: cover;
    border-radius: 10px;
  }

  .cardFigcaption{
    border: 1px solid ghostwhite;
    padding: 2vh;
    border-radius: 10px;
  }

  .card-info {
    width: 30vh;
    display: flex;
    justify-content: center;
    column-gap: 2vh;
  }

  
}

@media (min-width: 600px){
  .dishGallery{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .dishGallery ul {
    width: 90%; 
    padding-right: 5vh;
    list-style: none;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    column-gap: 10px;
  }

  .search-bar > form{
    column-gap: 1vw;
  }

  .searchBtn:hover{
    cursor: pointer;
    scale: 1.1;
  }

  .pageBtn > button:hover{
    background-color: transparent;
    color: #316318;
    cursor: pointer;
    scale: 1.1;
  }
}


/* figcaption {
  border: 1px solid ghostwhite;
  box-shadow: 2px 2px 2px  gainsboro;
  padding: 2vh;
} */



/* .cardImg {
  display: flex;
  justify-content: center;
  column-gap: 2vh;

}

.dishCard {
  background-size: cover;
  background-position: center;
}

.fa-heart {
  padding: 8px;
  font-size: 22px;
  cursor: pointer;
} */



img {
  width: 100%;
}

.dishGallery {
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 4vh;
}
</style>
