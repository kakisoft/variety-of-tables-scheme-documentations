# wiki_pages

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `wiki_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wiki_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wiki_pages_wiki_id_title` (`wiki_id`,`title`),
  KEY `index_wiki_pages_on_wiki_id` (`wiki_id`),
  KEY `index_wiki_pages_on_parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(11) |  | false | auto_increment |  |  |  |
| wiki_id | int(11) |  | false |  |  |  |  |
| title | varchar(255) |  | false |  |  |  |  |
| created_on | datetime |  | false |  |  |  |  |
| protected | tinyint(1) | 0 | false |  |  |  |  |
| parent_id | int(11) |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| index_wiki_pages_on_parent_id | KEY index_wiki_pages_on_parent_id (parent_id) USING BTREE |
| index_wiki_pages_on_wiki_id | KEY index_wiki_pages_on_wiki_id (wiki_id) USING BTREE |
| wiki_pages_wiki_id_title | KEY wiki_pages_wiki_id_title (wiki_id, title) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](wiki_pages.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)