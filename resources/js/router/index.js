import Home from '../components/Home.vue'
import News from '../components/News.vue'
import Panduan from '../components/Panduan.vue'
import Profile from '../components/Profile.vue'

const progressSettings = {
    func: [
        { call: 'color', modifier: 'temp', argument: '#ffb000' },
        { call: 'fail', modifier: 'temp', argument: '#6e0000' },
        { call: 'location', modifier: 'temp', argument: 'top' },
        { call: 'transition', modifier: 'temp', argument: { speed: '1.5s', opacity: '0.6s', termination: 400 } }
    ]
  };

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {
                progress: progressSettings,
                title : 'Home/ Beranda'
            }

        },
        {
            path: '/news',
            name: 'news',
            component: News,
            meta: {
                progress: progressSettings,
                title : 'News/ Informasi'
            }
        },
        {
            path: '/panduan',
            name: 'panduan',
            component: Panduan,
            meta: {
                progress: progressSettings,
                title : 'Panduan'
            }
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
            meta: {
                progress: progressSettings,
                title : 'Profile'
            }
        }
    ]
}
