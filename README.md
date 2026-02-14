# VARK Auto Grouping for Moodle

This local plugin automatically assigns students to Moodle groups based on their results from a **mod_questionnaire** VARK assessment.

## Features
- Listens for questionnaire submissions automatically.
- Calculates V/A/R/K scores based on checkbox answers (checks the first letter of the answer).
- Handles ties (adds student to multiple groups if scores are equal).
- Clears previous VARK group memberships before assigning new ones.
- **Configurable:** Admin can define custom group names via settings.

## Prerequisites
- Moodle 5.x or 4.x
- `mod_questionnaire` plugin must be installed.
- The questionnaire must use "Check Boxes" question type.
- Answer options must start with `V`, `A`, `R`, or `K` (e.g., `V::Visual Content...`).

## Installation

1. Download the zip file and extract it to `your_moodle_site/local/varkassign`.
2. Go to **Site Administration > Notifications** to install the plugin.
3. Go to **Site Administration > Plugins > Local plugins > VARK Auto Grouping**.
4. Configure the group names that correspond to your course groups (Default: `Vark_V`, `Vark_A`, `Vark_R`, `Vark_K`).

## Usage
1. Create groups in your course matching the names configured in the settings.
2. Create a Questionnaire with questions where answers map to V/A/R/K.
3. When a student submits, they are automatically moved to the corresponding group.