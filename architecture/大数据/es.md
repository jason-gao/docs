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