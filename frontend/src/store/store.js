import { configureStore, getDefaultMiddleware } from '@reduxjs/toolkit';
import { createLogger } from 'redux-logger';

// import testSlice from './slices/testSlice';
import footerSlice from './slices/footerSlice';
// import { checkAgePositive } from '../middleware/redux/checkAgePositive';



const middleware = [
    ...getDefaultMiddleware(),
    createLogger(),
    //checkAgePositive
];

const store = configureStore({
    reducer: {
        //test: testSlice,
        footer: footerSlice
    },
    middleware
});

export default store;