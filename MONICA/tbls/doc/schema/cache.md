# cache

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| key | varchar(255) |  | false |  |  |  |
| value | text |  | false |  |  |  |
| expiration | int(11) |  | false |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| cache_key_unique | UNIQUE | UNIQUE KEY cache_key_unique (key) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| cache_key_unique | UNIQUE KEY cache_key_unique (key) USING BTREE |

## Relations

![er](cache.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
