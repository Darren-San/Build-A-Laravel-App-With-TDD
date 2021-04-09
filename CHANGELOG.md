## Changelog

### Update 43 [`ff0bfef`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/ff0bfef13a318e376153eef01c7249dde45e1be8)
- New dropdown vue component for user settings

### Update 42 [`a09e43a`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/a09e43af8e2d16b96185a8aa0d2ddc5982e686ef)
- New project modal js abstracted to class `BirdboardForm.js`

### Update 41 [`95194ff`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/95194ff4c1f3e8ca64cd191cfe929f6aabb5fd53)
- Added task behavior for tasks in new project modal
- Feature Test updates in `ManageProjectsTest`
  - New Feature test `tasks_can_be_included_as_part_a_new_project_creation`

### Update 40 [`31504a5`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/31504a5f9a3d81b7646eeb80161db50d90e74196)
- Added behavior for the new project modal

### Update 39 [`4901dfd`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/4901dfdb190f694f0ca85b95dd2f27fce1079182)
- Added modal when cerating a new project

### Update 37 & 38 [`39ff00d`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/39ff00de37d8b6fe61cb38fe1d180e1108005ace)
-  Users may now toogle between Themes

### Update 36 [`df23480`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/df2348071bb0d14d71b3807b4ea17f37092653d0)
- Added Light & Dark Themes

### Update 35 [`b9d96a1`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/b9d96a16deea99640140834373371d89d591a422)
- Invited users now cannot delete projects they don't own

### Update 34 [`080f967`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/080f967ba80cdec81b7423fa6900f6d33321af00)
- Errors now display on the project view forms
- Updated Feature tests in class `InvitationsTest`
  - `non_owners_may_not_invite_users`
  - `the_email_address_must_be_associated_with_a_valid_birdboard_account`

### Update 33 [`8836fa8`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/8836fa86835d48c3959af9e8edc0ad80c51cb13e)
- Improved User invitation to a project
- Unit Test updates in `InvitationsTest`
  - Renamed `a_project_can_invite_a_user` as `a_project_owner_can_invite_a_user`
  - New Unit test `non_owners_may_not_invite_users`
  - New Unit test `the_email_address_must_be_associated_with_a_valid_birdboard_account`
  - New Unit test `invited_users_may_update_project_details`

### Update 32 [`148be9e`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/148be9e3fe9ff79e58a3f903b123db7d88e65fdd)
- Project page now displays involved users' icons on top

### Update 31 [`917dce2`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/917dce2950720de2fb2d478a5ef7d9db5d772143)
- Project Dashboard now shows Accessible Projects
- New Feature test `unauthorized_users_cannot_delete_projects` in `ManageProjectsTest`
- New Unit Test class `UserTest`
  - New Unit test `a_user_has_accesible_projects`

### Update 30 [`90430ca`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/90430caac878eba653589f9d8e82ce6546a21b3f)
- Now a User can be invited to a Project
- New Feature Test class `InvitationsTest`
  - New Feature test `a_project_can_invite_a_user`
- New Unit test `it_can_invite_a_user` in class `ProjectTest`

### Update 29 [`4cb1d00`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/4cb1d0040b9b5ab9a10f16bce41382cc1275015b)
- Users with the appropriate permissions can now delete Projects
- Routes refactor
- New Feature Test class `ManageProjectsTest`
  - New Feature test `unauthorized_users_cannot_delete_projects`
  - New Feature test `a_user_can_delete_a_project`


### Update 28 [`b070128`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/b0701280228cdef9b112e2973cf92e55c4bb1998)
- Activity feed now displays which User triggered the Activity
- New Unit Test class `ActivityTest`
  - New Unit test `it_has_a_user`

### Update 27 [`fa89dea`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/fa89dea5a6d4c62c62c135f9088d0f762debaf6d)
- All Activity functionality now as a Trait `RecordsActivity`
  - This removes the observers for Project and Task

### Update 26 [`52f1310`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/52f131059b10ed8f11eb37cc1a6c4c21f6719c23)
- Activity feed now displays Project modifications

### Update 25 [`4b984a3`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/4b984a3d86dd288ceccd18ab85fd5aca7cb8014a)
- Activity feed now displays which activity was made

### Update 24 [`ead5e5d`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/ead5e5dc6c9f6bff5e9cd838c18f4a660de0dabe)
- Project view now shows User activity

### Update 23 [`63a6faf`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/63a6faf3e4486a052dac5cf78225159d1fe33876)
- New Observer `TaskObserver`
- New Feature test `incompleting_a_task`
- New Feature test `deleting_a_task`
- Renamed Feature test class `AcvtivityFeedTest` to `TriggerActivityTest`
- Renamed tests from `TriggerActivityTest`
  - `creating_a_project_records_activity` to `creating_a_project`
  - `updating_a_project_records_activity` to `updating_a_project`
  - `creating_a_new_task_records_project_activity` to `creating_a_new_task`
  - `completing_a_new_task_records_project_activity` to `completing_a_task`

### Update 22 [`f07fc5f`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/f07fc5fc9162cf631f8a21cfe10476092748d527)
- New Feature test `a_task_can_be_completed`
- New Feature test `a_task_can_be_marked_as_incomplete`
- New Unit test `it_can_be_marked_as_incomplete` in class `TaskTest`


### Update 21 [`5389dfb`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/5389dfb6cc10de743d11fbd990e2a37c7fe21ecb)
- New Feature test `creating_a_new_task_records_project_activity`
- New Feature test `completing_a_new_task_records_project_activity`
- Renamed tests from `AcvtivityFeedTest`
  - `creating_a_project_generates_activity` to `creating_a_project_records_activity`
  - `updating_a_project_generates_activity` to `updating_a_project_records_activity`
- New Unit test `it_can_be_completed` in class `TaskTest`
- New Feature test `creating_a_project_records_activity`
- New Feature test `updating_a_project_records_activity`
- New Feature test `creating_a_new_task_records_project_activity`
- New Feature test `completing_a_new_task_records_project_activity`

### Update 20 [`f5f8fa2`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/f5f8fa2162dc16cfb6565f4ecb1844272169a243)
- New Observer `ProjectObserver`
- Add activity feed feature
- New feature test class `ActivityFeedTest`
  - New Feature test `creating_a_project_generates_activity`
  - New Feature test `updating_a_project_generates_activity`

### Update 19 [`7bfdb2f`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/7bfdb2f4d3049d14c50c93e4d346986791fa9639)
- Add form request validation

### Update 18 [`a8a5b10`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/a8a5b10af30d0d3913e368bbb6e573a1adeb025b) && [`88dcbb8`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/88dcbb89f6c43d5490d8f79ba222861ef9926129)
- Add form template for duplication
- Update form Styling

### Update 17 [`0bd0113`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/0bd01137bea884ba18d39d8c313914b74efa6441)
- Add `ProjectFactory` class

### Update 16 [`a331472`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/a331472f08ae253f97e527d2021783249de1798e)
- Add authorization Policies for project updates
- Add project notes functionality
- New Feature test `a_user_can_update_a_project`
- New Feature test `an_authenticated_user_cannot_update_the_projects_of_others`


### Update 15 [`5e2fa99`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/5e2fa9972f9494060626f47514605ab605279c7b)
- Task touches `updated_at` from project
- `User->project()` now returns most recently updated project

### Update 14 [`80cab56`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/80cab56205576bda866685492e81910a2ec51b6e) && [`d19aff9`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/d19aff94886c60713a4c5562706dc771d459fde3)
- Project form now updates when a task is completed
- Add task-project relationship

### Update 13 [`146080a`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/146080ad6209731921a1ca2df05d5102cf69c99d)
- Add redirect when a project is updated
- Project Card now shows Tasks
- New Feature Test `guests_cannot_add_tasks_to_projects`
- New Feature Test `only_the_owner_of_a_project_may_add_tasks`


### Update 12 [`c03c32d`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/c03c32dbcee8fa6cf35ae684434be6405ebecd90)
- Now projects have tasks
- Feature Test updates in `ManageProjectsTest`
- New feature test class `ProjectTasksTest`
  - New Feature Test `a_project_can_have_a_task`
  - New Feature Test `a_project_requires_a_body`
- Unit Test updates in `ProjectTest`
  - New Unit Test `it_can_add_a_task`

### Update 11 [`affad8a`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/affad8ab4f1b4d8b3687476b06d3fcae0d494f7a)
- Project page styling

### Update 10 [`f92696a`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/f92696a5c0211e5304a231580eaa555aa889282a) && [`c062cde`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/c062cde7ec00ade9baaabb07bdfe2bdbcdb2e1a9)
- Layout groundwork  

### Update 09 [`6222910`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/622291005123dbd6af0dae17f1c23566fb8ba22c)
- Basic Birdboard UI with Tailwind

### Update 08 [`bc170ae`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/bc170aee554ddd5f36970231a549b9e6029636e5)
- Installed npm dependencies && Tailwind

### Update 07 [`3ff4194`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/3ff4194ecc1c5774219ad633a02e1214465c6e98)
- Add create project view

### Update 06 [`045db18`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/045db1873b5564547ef54f64d9936a3427c0f590)
- Feature Test updates in `ProjectsTest`
  - New Feature test `guests_cannot_create_projects`
  - New Feature test `guests_cannot_view_projects`
  - New Feature test `guests_cannot_view_a_single_project`
  - New Feature test `an_authenticated_user_cannot_view_the_projects_of_others`


- Unit Test updates in `ProjectsTest`
  - New Unit test `it_belongs_to_an_owner`

### Update 05 [`6a50e9e`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/6a50e9e168f247562d6a8acff5efce580dd4c513)
- Projects now require an owner

### Update 04 [`9be5ddf`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/9be5ddfd8965df6213cd93386d132c3bffeaa312)
- Improve routing


### Update 03 [`64db1d3`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/64db1d35190455e797244b2a2099d1408777fd28) && [`57a5cfc`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/57a5cfc8760f972cb38a34a49a8112a23d3d503d)
- Feature Test updates in `ProjectsTest`
  - New Feature test `a_project_requires_a_title`
  - New Feature test `a_project_requires_a_description`
  - New Feature test `a_user_can_view_a_project`

### Update 02 [`3edde19`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/3edde19cf765337442478dea2bf2ca354cfb4636)
- Users can projects
- New feature test class `ProjectsTest`
  - New Feature test `a_user_can_create_a_project`

### Update 01 [`ca7f43b`](https://github.com/Darren-San/Build-A-Laravel-App-With-TDD/commit/ca7f43be2b4bedd0b4bc137d1aca1e4b12ef08a4)
- Initial installation
