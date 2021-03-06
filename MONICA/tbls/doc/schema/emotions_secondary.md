# emotions_secondary

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `emotions_secondary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emotion_primary_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emotions_secondary_emotion_primary_id_foreign` (`emotion_primary_id`),
  CONSTRAINT `emotions_secondary_emotion_primary_id_foreign` FOREIGN KEY (`emotion_primary_id`) REFERENCES `emotions_primary` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=[Redacted by tbls] DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment | [emotions](emotions.md) |  |  |
| emotion_primary_id | int(10) unsigned |  | false |  |  | [emotions_primary](emotions_primary.md) |  |
| name | varchar(255) |  | false |  |  |  |  |
| created_at | timestamp |  | true |  |  |  |  |
| updated_at | timestamp |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| emotions_secondary_emotion_primary_id_foreign | FOREIGN KEY | FOREIGN KEY (emotion_primary_id) REFERENCES emotions_primary (id) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| emotions_secondary_emotion_primary_id_foreign | KEY emotions_secondary_emotion_primary_id_foreign (emotion_primary_id) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](emotions_secondary.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
