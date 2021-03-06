# statistics

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `statistics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number_of_users` int(11) NOT NULL,
  `number_of_contacts` int(11) NOT NULL,
  `number_of_notes` int(11) NOT NULL,
  `number_of_oauth_access_tokens` int(11) NOT NULL,
  `number_of_oauth_clients` int(11) NOT NULL,
  `number_of_offsprings` int(11) NOT NULL,
  `number_of_progenitors` int(11) NOT NULL,
  `number_of_relationships` int(11) NOT NULL,
  `number_of_subscriptions` int(11) NOT NULL,
  `number_of_reminders` int(11) NOT NULL,
  `number_of_tasks` int(11) NOT NULL,
  `number_of_kids` int(11) NOT NULL,
  `number_of_activities` int(11) NOT NULL,
  `number_of_addresses` int(11) NOT NULL,
  `number_of_api_calls` int(11) NOT NULL,
  `number_of_calls` int(11) NOT NULL,
  `number_of_contact_fields` int(11) NOT NULL,
  `number_of_contact_field_types` int(11) NOT NULL,
  `number_of_debts` int(11) NOT NULL,
  `number_of_entries` int(11) NOT NULL,
  `number_of_gifts` int(11) NOT NULL,
  `number_of_invitations_sent` int(11) DEFAULT NULL,
  `number_of_accounts_with_more_than_one_user` int(11) DEFAULT NULL,
  `number_of_tags` int(11) DEFAULT NULL,
  `number_of_import_jobs` int(11) DEFAULT NULL,
  `number_of_conversations` int(11) DEFAULT NULL,
  `number_of_messages` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment |  |  |  |
| number_of_users | int(11) |  | false |  |  |  |  |
| number_of_contacts | int(11) |  | false |  |  |  |  |
| number_of_notes | int(11) |  | false |  |  |  |  |
| number_of_oauth_access_tokens | int(11) |  | false |  |  |  |  |
| number_of_oauth_clients | int(11) |  | false |  |  |  |  |
| number_of_offsprings | int(11) |  | false |  |  |  |  |
| number_of_progenitors | int(11) |  | false |  |  |  |  |
| number_of_relationships | int(11) |  | false |  |  |  |  |
| number_of_subscriptions | int(11) |  | false |  |  |  |  |
| number_of_reminders | int(11) |  | false |  |  |  |  |
| number_of_tasks | int(11) |  | false |  |  |  |  |
| number_of_kids | int(11) |  | false |  |  |  |  |
| number_of_activities | int(11) |  | false |  |  |  |  |
| number_of_addresses | int(11) |  | false |  |  |  |  |
| number_of_api_calls | int(11) |  | false |  |  |  |  |
| number_of_calls | int(11) |  | false |  |  |  |  |
| number_of_contact_fields | int(11) |  | false |  |  |  |  |
| number_of_contact_field_types | int(11) |  | false |  |  |  |  |
| number_of_debts | int(11) |  | false |  |  |  |  |
| number_of_entries | int(11) |  | false |  |  |  |  |
| number_of_gifts | int(11) |  | false |  |  |  |  |
| number_of_invitations_sent | int(11) |  | true |  |  |  |  |
| number_of_accounts_with_more_than_one_user | int(11) |  | true |  |  |  |  |
| number_of_tags | int(11) |  | true |  |  |  |  |
| number_of_import_jobs | int(11) |  | true |  |  |  |  |
| number_of_conversations | int(11) |  | true |  |  |  |  |
| number_of_messages | int(11) |  | true |  |  |  |  |
| created_at | timestamp |  | true |  |  |  |  |
| updated_at | timestamp |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](statistics.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
