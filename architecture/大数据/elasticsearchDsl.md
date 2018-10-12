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

* group by & avg
    * https://www.elastic.co/guide/en/elasticsearch/reference/current/_executing_aggregations.html
    * https://es.xiaoleilu.com/010_Intro/35_Tutorial_Aggregations.html
    
# 返回空的buckets
* https://www.elastic.co/guide/cn/elasticsearch/guide/current/_returning_empty_buckets.html
```json
{
   "size" : 0,
   "aggs": {
      "sales": {
         "date_histogram": {
            "field": "sold",
            "interval": "month",
            "format": "yyyy-MM-dd",
            "min_doc_count" : 0, 
            "extended_bounds" : { 
                "min" : "2014-01-01",
                "max" : "2014-12-31"
            }
         }
      }
   }
}
```
    
    
    