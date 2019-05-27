## 索引错误

- 先添加正确索引
```dsl
PUT /xx_bak
{
    "settings": { ... any settings ... },
    "mappings": {
        "type_one": { ... any mappings ... },
        "type_two": { ... any mappings ... },
        ...
    }
}

```
- 然后将老的索引的数据迁移到新的索引
```dsl

POST _reindex
{
  "source": {
    "index": "xx"
  },
  "dest": {
    "index": "xx_bak"
  }
}

```

- 删除旧的索引
DELETE /xx

- 添加正确索引
```dsl
PUT /xx
{
    "settings": { ... any settings ... },
    "mappings": {
        "type_one": { ... any mappings ... },
        "type_two": { ... any mappings ... },
        ...
    }
}
```

- 然后迁移索引
```dsl

POST _reindex
{
  "source": {
    "index": "xx_bak"
  },
  "dest": {
    "index": "xx"
  }
}

```


## 索引添加字段
PUT test/_mapping/test_log
{
	"properties": {
		"name": {
			"type": "keyword"
		}
	}
}


## 添加索引

PUT xx-2019-05-07
{
  "mappings": {
    "xx": {
      "dynamic": "strict",
      "_all": {
        "enabled": false
      },
      "properties": {
        "Timestamp": {
          "type": "date",
          "format": "yyyy-MM-dd HH:mm:ss"
        },
        "remote_addr": {
          "type": "keyword"
        },
        "remote_port": {
          "type": "integer"
        },
        "request_id": {
          "type": "keyword"
        },
        "upstream_status": {
          "type": "keyword"
        }
      }
    }
  },
  "settings": {
    "index": {
      "refresh_interval": "60s",
      "number_of_shards": "40",
      "unassigned": {
        "node_left": {
          "delayed_timeout": "5m"
        }
      },
      "number_of_replicas": "1"
    }
  }
}

# 查看所有索引
```text
GET _cat/indices
```


# keyword wiildcard查询
```json
{
	"properties": {
		"params": {
			"type": "keyword"
		},
		"updated_at": {
			"type": "date",
			"format": "yyyy-MM-dd HH:mm:ss"
		}
	}
}
```
```json
{
	"wildcard": {
		"params": "*未备案*"
	}
}
```

# object match查询

```json
{
	"params": {
		"properties": {
			"source": {
				"type": "text",
				"fields": {
					"keyword": {
						"type": "keyword",
						"ignore_above": 256
					}
				}
			}
		}
	}
}
```

```json
{
  "query": {
    "bool": {
      "must": [
        {
          "match": {
            "params.source": "xxx"
          }
        }
      ]
    }
  }
}
```


# 创建索引
```text
PUT xx
{
	"mappings": {
		"xx": {
			"dynamic": "strict",
			"_all": {
				"enabled": false
			},
			"properties": {
				"admin_user_id": {
					"type": "keyword"
				},
				"admin_nickname": {
					"type": "keyword"
				},
				"member_id": {
					"type": "keyword"
				},
				"member_email": {
					"type": "keyword"
				},
				"req_params": {
					"type": "object"
				},
				"res_code": {
					"type": "keyword"
				},
				"res_message": {
					"type": "keyword"
				},
				"res_data": {
					"type": "object"
				},
				"res_params": {
					"type": "object"
				},
				"oldValue": {
					"type": "object"
				},
				"newValue": {
					"type": "object"
				},
				"message": {
					"type": "keyword"
				},
				"remark": {
					"type": "keyword"
				},
				"domain": {
					"type": "keyword"
				},
				"pri_domain": {
					"type": "keyword"
				},
				"package_id": {
					"type": "keyword"
				},
				"meal_flag": {
					"type": "keyword"
				},
				"product_flag": {
					"type": "keyword"
				},
				"client_ip": {
					"type": "keyword"
				},
				"client_userAgent": {
					"type": "keyword"
				},
				"machine_ip": {
				    "type": "keyword"
				},
				"syskey": {
				    "type": "keyword"
				},
				"_route_": {
				    "type": "keyword"
				},
				"router": {
				    "type": "keyword"
				},
				"module": {
				    "type": "keyword"
				},
				"controller": {
				    "type": "keyword"
				},
				"method": {
				    "type": "keyword"
				},
				"get": {
				    "type": "object"
				},
				"post": {
				    "type": "object"
				},
				"log_type": {
				    "type": "keyword"
				},
				"created_at": {
                	"type": "date",
                	"format": "yyyy-MM-dd HH:mm:ss"
                }
			}
		}
	},
	"settings": {
		"index": {
			"refresh_interval": "60s",
			"number_of_shards": "40",
			"unassigned": {
				"node_left": {
					"delayed_timeout": "5m"
				}
			},
			"number_of_replicas": "1"
		}
	}
}


```
