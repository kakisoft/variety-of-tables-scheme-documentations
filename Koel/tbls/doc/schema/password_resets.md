# password_resets

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| email | varchar(255) |  | false |  |  |  |  |
| token | varchar(255) |  | false |  |  |  |  |
| created_at | timestamp | CURRENT_TIMESTAMP | false | on update CURRENT_TIMESTAMP |  |  |  |

## Indexes

| Name | Definition |
| ---- | ---------- |
| password_resets_email_index | KEY password_resets_email_index (email) USING BTREE |
| password_resets_token_index | KEY password_resets_token_index (token) USING BTREE |

## Relations

![er](password_resets.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
