# wp_options

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=InnoDB AUTO_INCREMENT=[Redacted by tbls] DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| option_id | bigint(20) unsigned |  | false | auto_increment |  |  |  |
| option_name | varchar(191) |  | false |  |  |  |  |
| option_value | longtext |  | false |  |  |  |  |
| autoload | varchar(20) | yes | false |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| option_name | UNIQUE | UNIQUE KEY option_name (option_name) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (option_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| autoload | KEY autoload (autoload) USING BTREE |
| PRIMARY | PRIMARY KEY (option_id) USING BTREE |
| option_name | UNIQUE KEY option_name (option_name) USING BTREE |

## Relations

![er](wp_options.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
