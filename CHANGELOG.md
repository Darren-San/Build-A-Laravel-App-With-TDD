## Changelog

### Update 23 [`placeholder`]()
- soon™

### Update 22 [`5389dfb`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/f07fc5fc9162cf631f8a21cfe10476092748d527)
- New Feature test `a_task_can_be_completed`
- New Feature test `a_task_can_be_marked_as_incomplete`
- New Unit test `it_can_be_marked_as_incomplete` in class `TaskTest`


### Update 21 [`c985206`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/5389dfb6cc10de743d11fbd990e2a37c7fe21ecb)
- New Feature test `creating_a_new_task_records_project_activity`
- New Feature test `completing_a_new_task_records_project_activity`
- Renamed tests from `AcvtivityFeedTest`
  - `creating_a_project_generates_activity` into `creating_a_project_records_activity`
  - `updating_a_project_generates_activity` into `updating_a_project_records_activity`
- New Unit test `it_can_be_completed` in class `TaskTest`
- New Feature test `creating_a_project_records_activity`
- New Feature test `updating_a_project_records_activity`
- New Feature test `creating_a_new_task_records_project_activity`
- New Feature test `completing_a_new_task_records_project_activity`

### Update 20 [`7bfdb2f`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/f5f8fa2162dc16cfb6565f4ecb1844272169a243)
- Add activity feed feature
- New feature test class `ActivityFeedTest`
  - New Feature test `creating_a_project_generates_activity`
  - New Feature test `updating_a_project_generates_activity`

### Update 19 [`88dcbb8`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/7bfdb2f4d3049d14c50c93e4d346986791fa9639)
- Add form request validation

### Update 18 [`0bd0113`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/a8a5b10af30d0d3913e368bbb6e573a1adeb025b) && [`a8a5b10`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/88dcbb89f6c43d5490d8f79ba222861ef9926129)
- Add form template for duplication
- Update form Styling

### Update 17 [`a331472`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/0bd01137bea884ba18d39d8c313914b74efa6441)
- Add `ProjectFactory` class

### Update 16 [`5e2fa99`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/a331472f08ae253f97e527d2021783249de1798e)
- Add authorization Policies for project updates
- Add project notes functionality
- New Feature test `a_user_can_update_a_project`
- New Feature test `an_authenticated_user_cannot_update_the_projects_of_others`


### Update 15 [`d19aff9`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/5e2fa9972f9494060626f47514605ab605279c7b)
- Task touches `updated_at` from project
- `User->project()` now returns most recently updated project

### Update 14 [`146080a`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/80cab56205576bda866685492e81910a2ec51b6e) && [`80cab56`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/d19aff94886c60713a4c5562706dc771d459fde3)
- Project form now updates when a task is completed
- Add task-project relationship

### Update 13 [`c03c32d`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/146080ad6209731921a1ca2df05d5102cf69c99d)
- Add redirect when a project is updated
- Project Card now shows Tasks
- New Feature Test `guests_cannot_add_tasks_to_projects`
- New Feature Test `only_the_owner_of_a_project_may_add_tasks`
