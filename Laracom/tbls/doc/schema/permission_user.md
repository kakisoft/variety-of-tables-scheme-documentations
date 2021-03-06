# permission_user

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| permission_id | int(10) unsigned |  | false |  | [permissions](permissions.md) |  |
| user_id | int(10) unsigned |  | false |  |  |  |
| user_type | varchar(255) |  | false |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| permission_user_permission_id_foreign | FOREIGN KEY | FOREIGN KEY (permission_id) REFERENCES permissions (id) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (user_id, permission_id, user_type) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| permission_user_permission_id_foreign | KEY permission_user_permission_id_foreign (permission_id) USING BTREE |
| PRIMARY | PRIMARY KEY (user_id, permission_id, user_type) USING BTREE |

## Relations

![er](permission_user.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
