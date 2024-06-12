import { extend } from 'flarum/common/extend';
import app from 'flarum/forum/app';
import UserPage from 'flarum/forum/components/UserPage';
import SessionDropdown from 'flarum/forum/components/SessionDropdown';

app.initializers.add('mohmmad/disable-profile-page', () => {
  extend(UserPage.prototype, 'oninit', function() {
    if (app.current.matches(UserPage)) {
        m.route.set("/");
    }
  });
  extend(SessionDropdown.prototype, 'items', function(items) {
    items.remove('profile');
  });
});
