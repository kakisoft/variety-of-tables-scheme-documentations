# life_events

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `life_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `contact_id` int(10) unsigned NOT NULL,
  `life_event_type_id` int(10) unsigned NOT NULL,
  `reminder_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci,
  `happened_at` datetime NOT NULL,
  `happened_at_month_unknown` tinyint(1) NOT NULL DEFAULT '0',
  `happened_at_day_unknown` tinyint(1) NOT NULL DEFAULT '0',
  `specific_information` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `life_events_account_id_foreign` (`account_id`),
  KEY `life_events_contact_id_foreign` (`contact_id`),
  KEY `life_events_life_event_type_id_foreign` (`life_event_type_id`),
  KEY `life_events_reminder_id_foreign` (`reminder_id`),
  CONSTRAINT `life_events_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `life_events_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `life_events_life_event_type_id_foreign` FOREIGN KEY (`life_event_type_id`) REFERENCES `life_event_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `life_events_reminder_id_foreign` FOREIGN KEY (`reminder_id`) REFERENCES `reminders` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment |  |  |  |
| account_id | int(10) unsigned |  | false |  |  | [accounts](accounts.md) |  |
| contact_id | int(10) unsigned |  | false |  |  | [contacts](contacts.md) |  |
| life_event_type_id | int(10) unsigned |  | false |  |  | [life_event_types](life_event_types.md) |  |
| reminder_id | int(10) unsigned |  | true |  |  | [reminders](reminders.md) |  |
| name | varchar(255) |  | true |  |  |  |  |
| note | mediumtext |  | true |  |  |  |  |
| happened_at | datetime |  | false |  |  |  |  |
| happened_at_month_unknown | tinyint(1) | 0 | false |  |  |  |  |
| happened_at_day_unknown | tinyint(1) | 0 | false |  |  |  |  |
| specific_information | text |  | true |  |  |  |  |
| created_at | timestamp |  | true |  |  |  |  |
| updated_at | timestamp |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| life_events_account_id_foreign | FOREIGN KEY | FOREIGN KEY (account_id) REFERENCES accounts (id) |
| life_events_contact_id_foreign | FOREIGN KEY | FOREIGN KEY (contact_id) REFERENCES contacts (id) |
| life_events_life_event_type_id_foreign | FOREIGN KEY | FOREIGN KEY (life_event_type_id) REFERENCES life_event_types (id) |
| life_events_reminder_id_foreign | FOREIGN KEY | FOREIGN KEY (reminder_id) REFERENCES reminders (id) |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| life_events_account_id_foreign | KEY life_events_account_id_foreign (account_id) USING BTREE |
| life_events_contact_id_foreign | KEY life_events_contact_id_foreign (contact_id) USING BTREE |
| life_events_life_event_type_id_foreign | KEY life_events_life_event_type_id_foreign (life_event_type_id) USING BTREE |
| life_events_reminder_id_foreign | KEY life_events_reminder_id_foreign (reminder_id) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](life_events.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)