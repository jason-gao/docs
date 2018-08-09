* group by & sum field
    * https://discuss.elastic.co/t/group-by-sum-field/61104
    * https://stackoverflow.com/questions/30467211/elastic-search-sum-aggregation-with-group-by-and-where-condition
```json
{
  "aggs": {
    "by_xxx": {
      "terms": {
        "field": "xxx"
      },
      "aggs": {
       "do_a_sum_on_field_yyy":  {
          "sum": {
             "field": "yyy"
          }
       }
      }
    }
  }
}
```

